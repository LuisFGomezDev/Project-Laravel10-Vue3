<script setup lang="ts">

//import { defineComponent, ref } from 'vue';

import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
//import SecondaryButton from '@/Components/PrimaryButton.vue';

import TextInput from '@/Components/TextInput.vue';

import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';

//import "bootstrap/dist/css/bootstrap.min.css"
//import "bootstrap"

/*
import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap";

import "bootstrap-vue/dist/css/bootstrap-vue.min.css";
import "bootstrap-vue";
*/
//import { FormSelectPlugin } from '@inertiajs/bootstrap-vue'
//Vue.use(FormSelectPlugin);
//import { onMounted } from 'vue';
//import { Vuejs  } from '@inertiajs/vue3';


const form = useForm({
    
    email: '',
    clave: '',
    confirma_clave: '',
    nombre: '',
    apellido: '',
    empresa: '',
    telefono: ''

});


const submit = () => {
    form.post(route('facturar'), {
        onFinish: () => {
            form.reset('clave', 'confirma_clave');
        },
    });
};

//let PreguntaSeg: ["Pepito","Juanito","Pablito","Pedrito"];

//*****MANEJO DEL SELECT INDICATIVO******/
/*
export defineComponent({
    data() {
        return {
            opcionSeleccionada: '' as string,
        };
    },
    methods: {
        enviarDatos() {
            this.$emit('/facturar', this.opcionSeleccionada);
        },
    },
});
*/
//****************************/
/*
export default: {
    data() {
      return {
        selected: null,
        options: [
          { value: null, text: 'Please select an option' },
          { value: 'a', text: 'This is First option' },
          { value: 'b', text: 'Selected Option', disabled: true },
          {
            label: 'Grouped options',
            options: [
              { value: { C: '3PO' }, text: 'Option with object value' },
              { value: { R: '2D2' }, text: 'Another option with object value' }
            ]
          }
        ]
      }
    }
  }
*/

/*
const app = new Vue({
  el:'#app',
  data:{
    errors:[],
    name:null,
    age:null,
    movie:null
  },
  methods:{
    checkForm:function(e: Event) {
      if(this.name && this.age) return true;
      this.errors = [];
      if(!this.name) this.errors.push("Name required.");
      if(!this.age) this.errors.push("Age required.");
      e.preventDefault();
    }
  }
})
*/
</script>

<style scoped>
    table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    }

    th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
    }

    th {
    background-color: #f2f2f2;
    }

    input,select {
    margin-left: 10px;
    }
</style>


<template>
    <Head title="Facturación" />

    <AuthenticatedLayout>
        <template #header>
            
            <h2 class="font-semibold text-xl text-purple-800 leading-tight">3. DETALLES DE FACTURACIÓN</h2>

        </template>

        <form id="app" @submit.prevent="submit">
            <div class="py-4">
                <div class="max-w-3xl mx-auto sm:px-6 lg:px-30">
                    <div class="bg-gray-100 overflow-hidden shadow-sm sm:rounded-sm">

                        <!-- El Asterisco Rojo de Campos Obligatorios -->
                        <div class="hidden space-x-18 sm:-my-px sm:ms-10 sm:flex">
                                <div class="block font-medium text-3xl text-red-600">*</div>
                                <div class="block font-medium text-lg text-gray-500">Los marcados con asterisco son requeridos</div>
                        </div>

<!--***************************************************-->
            <table>
                <tbody>
                    <tr><!--Campo 1 - Email -->
                        <td style="text-align: right">
                    
                            <!-- Primera Columna-->
                            <div class="">
                                        
                                        <!-- Columna 1 SOLA -->
                                        <div class="hidden space-x-2 sm:-my-px sm:ms-20 sm:flex">
                                            <div class="block font-medium text-lg text-gray-500">
                                                <InputLabel for="email" value="Email" />
                                            </div>

                                            <div class="block font-medium text-3xl text-red-600">*</div>
                                        </div>
                            </div>
                        </td>

                        <td>
                            <!-- Segunda Columna-->
                            <div class="grid grid-cols-1 gap-4">
                                            
                                        <!-- Columna 2 SOLA -->
                                        <div class="mt-2">
                                                <TextInput
                                                    id="email"
                                                    name="email_InputD"
                                                    type="email"
                                                    placeholder="Email"
                                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                    v-model="form.email"
                                                    required
                                                    autocomplete="Email"
                                                TextInput/>

                                                <InputError class="mt-2" :message="form.errors.email" />
                                        </div>
                            </div>
                        </td>
                    </tr>

            <!--***************************************************-->

                    <tr><!--Campo 2 - Clave -->
                        <td style="text-align: right">
                    
                            <!-- Primera Columna-->
                            <div class="">
                                        
                                        <!-- Columna 1 SOLA -->
                                        <div class="hidden space-x-2 sm:-my-px sm:ms-20 sm:flex">
                                            <div class="block font-medium text-lg text-gray-500">
                                                <InputLabel for="clave" value="Clave" />
                                            </div>

                                            <div class="block font-medium text-3xl text-red-600">*</div>
                                        </div>
                            </div>
                        </td>

                        <td>
                            <!-- Segunda Columna-->
                            <div class="grid grid-cols-1 gap-4">
                                            
                                        <!-- Columna 2 SOLA -->
                                        <div class="mt-2">
                                            <TextInput
                                                id="clave"
                                                name="psw_InputD"
                                                type="password"
                                                placeholder="Clave"
                                                class="mt-1 block w-full"
                                                v-model="form.clave"
                                                required
                                                autocomplete="clave"
                                            />

                                            <InputError class="mt-2" :message="form.errors.clave" />
                                        </div>
                            </div>
                        </td>
                    </tr>

            <!--***************************************************-->

                    <tr><!--Campo 3 - Confirmar Clave -->
                        <td style="text-align: right">
                    
                            <!-- Primera Columna-->
                            <div class="">
                                        
                                        <!-- Columna 1 SOLA -->
                                        <div class="hidden space-x-2 sm:-my-px sm:ms-20 sm:flex">
                                            <div class="block font-medium text-lg text-gray-500">
                                                <InputLabel for="confirma_clave" value="Confirmar Clave" />
                                            </div>

                                            <div class="block font-medium text-3xl text-red-600">*</div>
                                        </div>
                            </div>
                        </td>

                        <td>
                            <!-- Segunda Columna-->
                            <div class="grid grid-cols-1 gap-4">
                                            
                                        <!-- Columna 2 SOLA -->
                                        <div class="mt-2">
                                            <TextInput
                                                    id="confirma_clave"
                                                    name="psw_Confirm_InputD"
                                                    type="password"
                                                    placeholder="Confirmar Clave"
                                                    class="mt-1 block w-full"
                                                    v-model="form.confirma_clave"
                                                    required
                                                    autocomplete="confirma_clave"
                                                />

                                                <InputError class="mt-2" :message="form.errors.confirma_clave" />
                                        </div>
                            </div>
                        </td>
                    </tr>

            <!--***************************************************-->

                    <tr><!--Campo 4 - Primer Nombre -->
                        <td style="text-align: right">
                    
                            <!-- Primera Columna-->
                            <div class="">
                                        
                                        <!-- Columna 1 SOLA -->
                                        <div class="hidden space-x-2 sm:-my-px sm:ms-20 sm:flex">
                                            <div class="block font-medium text-lg text-gray-500">
                                                <InputLabel for="nombre" value="Primer Nombre" />
                                            </div>

                                            <div class="block font-medium text-3xl text-red-600">*</div>
                                        </div>
                            </div>
                        </td>

                        <td>
                            <!-- Segunda Columna-->
                            <div class="grid grid-cols-1 gap-4">
                                            
                                        <!-- Columna 2 SOLA -->
                                        <div class="mt-2">

                                            <TextInput
                                                    id="nombre"
                                                    name="pname_InputD"
                                                    type="text"
                                                    placeholder="Primer Nombre"
                                                    class="mt-1 block w-full"
                                                    v-model="form.nombre"
                                                    required
                                                    autofocus
                                                    autocomplete="nombre"
                                            />

                                            <InputError class="mt-2" :message="form.errors.nombre" />
                                        </div>
                            </div>
                        </td>
                    </tr>

            <!--***************************************************-->


                    <tr><!--Campo 5 - Apellido -->
                        <td style="text-align: right">
                    
                            <!-- Primera Columna-->
                            <div class="">
                                        
                                        <!-- Columna 1 SOLA -->
                                        <div class="hidden space-x-2 sm:-my-px sm:ms-20 sm:flex">
                                            <div class="block font-medium text-lg text-gray-500">
                                                <InputLabel for="apellido" value="Apellido" />
                                            </div>

                                            <div class="block font-medium text-3xl text-red-600">*</div>
                                        </div>
                            </div>
                        </td>

                        <td>
                            <!-- Segunda Columna-->
                            <div class="grid grid-cols-1 gap-4">
                                            
                                        <!-- Columna 2 SOLA -->
                                        <div class="mt-2">

                                            <TextInput
                                                id="apellido"
                                                name="lastname_InputD"
                                                type="text"
                                                placeholder="Apellido"
                                                class="mt-1 block w-full"
                                                v-model="form.apellido"
                                                required
                                                autofocus
                                                autocomplete="apellido"
                                            />

                                            <InputError class="mt-2" :message="form.errors.apellido" />
                                        </div>
                            </div>
                        </td>
                    </tr>

            <!--***************************************************-->

                    <tr><!--Campo 6 - Empresa - Optional -->
                        <td style="text-align: right">
                    
                            <!-- Primera Columna-->
                            <div class="">
                                        
                                        <!-- Columna 1 SOLA -->
                                        <div class="hidden space-x-2 sm:-my-px sm:ms-20 sm:flex">
                                            <div class="block font-medium text-lg text-gray-500">
                                                <InputLabel for="empresa" value="Empresa (Optional)" />
                                            </div>

                                        </div>
                            </div>
                        </td>

                        <td>
                            <!-- Segunda Columna-->
                            <div class="grid grid-cols-1 gap-4">
                                            
                                        <!-- Columna 2 SOLA -->
                                        <div class="mt-2">

                                            <TextInput
                                                id="empresa"
                                                name="empresa_InputD"
                                                type="text"
                                                placeholder="Empresa (Optional)"
                                                class="mt-1 block w-full"
                                                v-model="form.empresa"
                                                autofocus
                                                autocomplete="Empresa (Optional)"
                                            />

                                            <InputError class="mt-2" :message="form.errors.empresa" />

                                        </div>
                            </div>
                        </td>
                    </tr>

            <!--***************************************************-->

                    <tr><!--Campo 7 - Teléfono -->
                        <td style="text-align: right">
                    
                            <!-- Primera Columna-->
                            <div class="">
                                        
                                        <!-- Columna Telefono -->
                                        <div class="hidden space-x-2 sm:-my-px sm:ms-20 sm:flex">
                                            <div class="block font-medium text-lg text-gray-500">
                                                <InputLabel for="telefono" value="Teléfono" />
                                            </div>

                                            <div class="block font-medium text-3xl text-red-600">*</div>

                                        <!-- Columna Indicativo -->
                                            <div class="hidden space-x-2 sm:-my-px sm:ms-20 sm:flex">
                                                <div class="block font-medium text-lg text-gray-500 bg-gray-100">
                                                    <select class="bg-gray-100" name="indicatselectDname" id="indicatselectD">
                                                        <option value="0" img src="{{ public_path . '/image' }}">+1</option>
                                                        <option value="1">+52</option>
                                                        <option value="2">+55</option>
                                                        <option value="3">+54</option>
                                                        <option value="4">+57</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                            </div>
                        </td>

                        <td>
                            <!-- Segunda Columna-->
                            <div class="grid grid-cols-1 gap-4">
                                            
                                        <!-- Columna 2 SOLA -->
                                        <div class="mt-2">

                                            <TextInput
                                                id="telefono"
                                                name="telefonoD"
                                                type="tel"
                                                placeholder="201-555-0123"
                                                class="mt-1 block w-full"
                                                v-model="form.telefono"
                                                autofocus
                                                autocomplete=""
                                            />

                                            <InputError class="mt-2" :message="form.errors.telefono" />

                                        </div>
                            </div>
                        </td>
                    </tr>

            <!--***************************************************-->


                    <tr><!--Campo 8 - Pregunta de Seguridad -->
                        <td style="text-align: right">
                    
                            <!-- Primera Columna-->
                            <div class="">
                                        
                                        <!-- Columna Telefono -->
                                        <div class="hidden space-x-2 sm:-my-px sm:ms-20 sm:flex">
                                            <div class="block font-medium text-lg text-gray-500">
                                                <InputLabel for="pregseglabel" value="Pregunta de Seguridad" />
                                            </div>

                                            <div class="block font-medium text-3xl text-red-600">*</div>
                                        </div>

                            </div>
                        </td>

                        <td>
                            <!-- Segunda Columna-->
                            <div class="grid grid-cols-1 gap-4">
                                            
                                        <!-- Columna 2 SOLA -->
                                        <div class="mt-2">

                                            <div id="select2">
                                                <select class="mt-1 block w-full space-x-1" name="pregsegselectD" id="pregsegselectD">
                                                    <option value="0">Cuál es el apellido de su mejor amigo del colegio?</option>
                                                    <option value="1">Pepito</option>
                                                    <option value="2">Juanito</option>
                                                    <option value="3">Pablito</option>
                                                    <option value="4">Pedrito</option>

                                                </select>
                                            </div>

                                        </div>
                            </div>
                        </td>
                    </tr>

            <!--***************************************************-->
            
             <tr>
                <td style="text-align: right">
                
                    
                    <PrimaryButton id="buttonD" class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        DOWNLOAD
                    </PrimaryButton>
                    
                    <!--*
                    <PrimaryButton class="ms-4" @click="enviarDatos">
                        DOWNLOAD
                    </PrimaryButton>
                    *-->

                </td>
            </tr>
<!--
            <tr>
                <td style="text-align: right">
                    <p v-if="errors.length">
                            <b>Por favor, corrija el(los) siguiente(s) error(es):</b>
                        <ul>
                            <li v-for="error in errors">{{ error }}</li>
                        </ul>
                    </p>
                </td>
            </tr>
-->

                </tbody>
            </table>

<!--***************************************************-->

                    </div>
                </div>
            </div>

        </form>

    </AuthenticatedLayout>
    
</template>