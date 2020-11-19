<template>
    <div class="container">
    <div class="row ">
        <div class="col-12">
            <blockquote class="blockquote text-center">
                <div class="row">
                    <div class="col-2">
                        <img src="img/uto.png" class="img-fluid" alt="Responsive image">
                    </div>
                    <div class="col-8">
                        <p class="mb-0">
                            III OLIMPIADA CIENCIA Y TECNOLOGÍA <br>
                            IX OLIMPIADA DE PROGRAMACIÓN <br>
                            IV OLIMPIADA DE ROBÓTICA <br>
                            PARA ESTUDIANTES DE SECUNDARIA 2020 <br>
                        </p>
                    </div>
                    <div class="col-2">
                        <img src="img/fni.png" class="img-fluid" alt="Responsive image">
                    </div>
                </div>

                <!--                <footer class="blockquote-footer">-->

                <!--                </footer>-->
            </blockquote>
            <form @submit.prevent="guardar">
                <p class="blockquote">I DATOS ESTUDIANTE</p>
                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label for="Apellido Paterno">Apellido Paterno</label>
                        <input type="text" class="form-control" v-bind:class="dato.paterno==null?'':dato.paterno==''?'is-invalid':'is-valid'" v-model="dato.paterno" id="Apellido Paterno" placeholder="Apellido Paterno" required>
                        <div class="valid-feedback">
                            Bien!
                        </div>
                        <div class="invalid-feedback">
                            Dato necesario!
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="Apellido Materno">Apellido Materno</label>
                        <input type="text" class="form-control" v-bind:class="dato.materno==null?'':dato.materno==''?'':'is-valid'" v-model="dato.materno" id="Apellido Materno" placeholder="Apellido Materno" >
                        <div class="valid-feedback">
                            Bien!
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="Nombres">Nombres</label>
                        <input type="text" class="form-control" v-bind:class="dato.nombres==null?'':dato.nombres==''?'is-invalid':'is-valid'" v-model="dato.nombres" id="Nombres" placeholder="Nombres" required>
                        <div class="valid-feedback">
                            Bien!
                        </div>
                        <div class="invalid-feedback">
                            Dato necesario!
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="Fecha Nacimiento">Fecha Nacimiento</label>
                        <input type="date" class="form-control" v-bind:class="dato.fechanac==null?'':dato.fechanac==''?'is-invalid':'is-valid'" v-model="dato.fechanac" id="Fecha Nacimiento" placeholder="Fecha Nacimiento" required>
                        <div class="valid-feedback">
                            Bien!
                        </div>
                        <div class="invalid-feedback">
                            Dato necesario!
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label >Sexo</label>
                        <!--                        <input type="date" class="form-control" v-bind:class="dato.sexo==null?'':dato.sexo==''?'is-invalid':'is-valid'" v-model="dato.sexo" id="Sexo" placeholder="Sexo" required>-->
                        <div class="form-check">
                            <input v-bind:class="dato.sexo==null?'':dato.sexo==''?'is-invalid':'is-valid'" v-model="dato.sexo" class="form-check-input" type="radio" name="sexo" id="sexo1" value="Femenino" required>
                            <label class="form-check-label" for="sexo1">
                                Femenino
                            </label>
                        </div>
                        <div class="form-check">
                            <input v-bind:class="dato.sexo==null?'':dato.sexo==''?'is-invalid':'is-valid'" v-model="dato.sexo" class="form-check-input" type="radio" name="sexo" id="sexo2" value="Masculino" required>
                            <label class="form-check-label" for="sexo2">
                                Masculino
                            </label>
                            <div class="valid-feedback">
                                Bien!
                            </div>
                            <div class="invalid-feedback">
                                Bono solo habilitado para mujeres!
                            </div>
                        </div>
                    </div>
                    <!--                    <div class="col-md-3 mb-3">-->
                    <!--                        <label for="Municipio de oruro">Provincia de oruro</label>-->
                    <!--&lt;!&ndash;                        <input type="date" class="form-control" v-bind:class="dato.fechanac==null?'':dato.fechanac==''?'is-invalid':'is-valid'" v-model="dato.fechanac" id="Municipio de oruro" placeholder="Municipio de oruro" required>&ndash;&gt;-->
                    <!--                        <select id="Municipio de oruro" class="form-control" v-bind:class="dato.provincia==null?'':dato.provincia!='Provincia de Cercado'?'is-invalid':'is-valid'" v-model="dato.provincia" required>-->
                    <!--                            <option value="Provincia de Sabaya">Provincia de Sabaya</option>-->
                    <!--                            <option value="Provincia de Carangas">Provincia de Carangas</option>-->
                    <!--                            <option value="Provincia de Cercado">Provincia de Cercado</option>-->
                    <!--                            <option value="Provincia de Eduardo Abaroa">Provincia de Eduardo Abaroa</option>-->
                    <!--                            <option value="Provincia de Ladislao Cabrera">Provincia de Ladislao Cabrera</option>-->
                    <!--                            <option value="Provincia de Litoral">Provincia de Litoral</option>-->
                    <!--                            <option value="Provincia de Mejillones">Provincia de Mejillones</option>-->
                    <!--                            <option value="Provincia de Nor Carangas">Provincia de Nor Carangas</option>-->
                    <!--                            <option value="Provincia de Pantaleón Dalence">Provincia de Pantaleón Dalence</option>-->
                    <!--                            <option value="Provincia de Poopó">Provincia de Poopó</option>-->
                    <!--                            <option value="Provincia de Sajama">Provincia de Sajama</option>-->
                    <!--                            <option value="Provincia de San Pedro de Totora">Provincia de San Pedro de Totora</option>-->
                    <!--                            <option value="Provincia de Saucarí">Provincia de Saucarí</option>-->
                    <!--                            <option value="Provincia de Sebastián Pagador">Provincia de Sebastián Pagador</option>-->
                    <!--                            <option value="Provincia de Sud Carangas">Provincia de Sud Carangas</option>-->
                    <!--                            <option value="Provincia de Tomás Barrón">Provincia de Tomás Barrón</option>-->
                    <!--                        </select>-->
                    <!--                        <div class="valid-feedback">-->
                    <!--                            Bien!-->
                    <!--                        </div>-->
                    <!--                        <div class="invalid-feedback">-->
                    <!--                            Bono solo para el Provincia cercado municipio de oruro!-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <div class="col-md-3 mb-3">
                        <label for="Carnet Identidad">Carnet Identidad</label>
                        <input type="text" class="form-control" v-bind:class="dato.ci==null?'':dato.ci==''?'is-invalid':'is-valid'" v-model="dato.ci" id="Carnet Identidad" placeholder="Carnet Identidad" required>
                        <div class="valid-feedback">
                            Bien!
                        </div>
                        <div class="invalid-feedback">
                            Dato necesario!
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="Telefono fijo">Telefono fijo</label>
                        <input type="text" class="form-control" v-bind:class="dato.fijo==null?'':dato.fijo==''?'':'is-valid'" v-model="dato.fijo" id="Telefono fijo" placeholder="Telefono fijo" >
                        <div class="valid-feedback">
                            Bien!
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="Celular">Celular</label>
                        <input type="text" class="form-control" v-bind:class="dato.celular==null?'':dato.celular==''?'is-invalid':'is-valid'" v-model="dato.celular" id="Celular" placeholder="Celular" required>
                        <div class="valid-feedback">
                            Bien!
                        </div>
                        <div class="invalid-feedback">
                            Dato necesario!
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="Dirección">Dirección Actual</label>
                        <input type="text" class="form-control" v-bind:class="dato.direccion==null?'':dato.direccion==''?'is-invalid':'is-valid'" v-model="dato.direccion" id="Dirección" placeholder="Dirección" required>
                        <div class="valid-feedback">
                            Bien!
                        </div>
                        <div class="invalid-feedback">
                            Dato necesario!
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="email">Correo electronico</label>
                        <input type="text" class="form-control" v-bind:class="dato.email==null?'':dato.email==''?'is-invalid':'is-valid'" v-model="dato.email" id="email" placeholder="email" required>
                        <div class="valid-feedback">
                            Bien!
                        </div>
                        <div class="invalid-feedback">
                            Dato necesario!
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <!--                    <div class="col-md-3 mb-3">-->
                                                <label for="Curso que cursa">Curso que cursa</label>
                                                <select id="Curso que cursa" class="form-control" v-bind:class="dato.curso==null?'':dato.curso==''?'':'is-valid'" v-model="dato.curso" required>
<!--                                                    <option value="1ro de Secundaria">1ro de Secundaria</option>-->
<!--                                                    <option value="2do de Secundaria">2do de Secundaria</option>-->
                                                    <option value="3ro de Secundaria">3ro de Secundaria</option>
                                                    <option value="4to de Secundaria">4to de Secundaria</option>
                                                    <option value="5to de Secundaria">5to de Secundaria</option>
                                                    <option value="6to de Secundaria">6to de Secundaria</option>
                                                </select>
                                                <div class="valid-feedback">
                                                    Bien!
                                                </div>
                                                <div class="invalid-feedback">
                                                    deve seleccionar!
                                                </div>
                        <!--                    </div>-->
                    </div>
                    <div class="col-md-12 mb-12">
                        <blockquote class="blockquote">
                            <p class="mb-0">II. CATEGORÍAS DE LA OLIMPIADA</p>
                            <footer class="blockquote-footer">
                                La olimpiada se llevará a cabo en las siguientes categorías:
                            </footer>
                        </blockquote>
                    </div>
                    <div v-if="dato.curso==null" class="col-md-12 mb-12">
                        <h4 class=" alert alert-warning  ">Porfavor selecione un curso para habilitar!!!</h4>
                    </div>
                    <template v-else>
                    <div class="col-md-6 mb-6">
                        <label ><b>Programacion</b></label>
                        <div class="form-check" v-if="dato.curso=='3ro de Secundaria'||dato.curso=='4to de Secundaria'||dato.curso=='5to de Secundaria'">
                            <input class="form-check-input" type="radio" name="programacion" id="programacion1" value="Categoría A: Programación. Nivel Básico" v-model="dato.programacion" required>
                            <label class="form-check-label" for="programacion1">
                                <b>Categoría A: Programación. Nivel Básico.</b>
                            </label>
                        </div>
                        <div class="form-check" v-if="dato.curso=='6to de Secundaria'">
                            <input class="form-check-input" type="radio" name="programacion" id="programacion2" value="Categoría B: Programación. Nivel Avanzad" v-model="dato.programacion" required>
                            <label class="form-check-label" for="programacion2">
                                <b>Categoría B: Programación. Nivel Avanzado.</b>
                            </label>
                        </div>
                        <div class="form-check" >
                            <input class="form-check-input" type="radio" name="programacion" id="programacion3" value="NINGUNO" v-model="dato.programacion" required>
                            <label class="form-check-label" for="programacion2">
                                <b>Ninguno.</b>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-6">
                        <label><b>Robotica</b></label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="robotica" id="robotica1" value="Categoría C: Robótica" v-model="dato.robotica" required>
                            <label class="form-check-label" for="robotica1">
                                <b>Categoría C: Robótica. </b>
                            </label>
                        </div>
                        <div class="form-check" >
                            <input class="form-check-input" type="radio" name="robotica" id="robotica2" value="NINGUNO" v-model="dato.robotica" required>
                            <label class="form-check-label" for="robotica2">
                                <b>Ninguno.</b>
                            </label>
                        </div>
                    </div>
                    </template>
                </div>
                <div class="col-md-12 mb-12">
                    <blockquote class="blockquote">
                        <p class="mb-0">III. CAPACITACIÓN</p>
                        <footer class="blockquote-footer">
                            La capacitación se llevará a cabo por la plataforma virtual de la carrera de Ingeniería de Sistemas e Ingeniería
                            Informática.
                        </footer>
                    </blockquote>
                </div>
                <div class="col-md-6 mb-6">
                    <label><b>Desea capacitacion?</b></label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="capacitacion" id="capacitacion1" value="SI" v-model="dato.capacitacion" required>
                        <label class="form-check-label" for="capacitacion1">
                            <b>SI. </b>
                        </label>
                    </div>
                    <div class="form-check" >
                        <input class="form-check-input" type="radio" name="capacitacion" id="capacitacion2" value="NO" v-model="dato.capacitacion" required>
                        <label class="form-check-label" for="capacitacion2">
                            <b>NO.</b>
                        </label>
                    </div>
                </div>
                <button class="btn btn-success btn-block my-3" type="submit" >
                    <i class="fa fa-save"></i> Realizar inscripcion
                </button>
            </form>
        </div>


    </div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    data:function(){
        return {
            dato:{hijos:[{nombres:'',apellidos:''}]},
        }
    },
    mounted() {
        console.log('Component mounted.');
    },
    methods:{
        generateReport () {
            this.$refs.html2Pdf.generatePdf()
        },
        mas(){
            this.dato.hijos.push({nombres:'',apellidos:''});
        },
        menos(index){
            this.dato.hijos.splice(index, 1);
        },
        guardar(){
            this.$fire({
                title: 'Seguro?',
                text: "De mandar informacion",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Confirmar'
            }).then((result) => {
                if (result.value) {
                    // console.log('si');
                    // return false;
                    // Swal.fire(
                    //     'Enviado!',
                    //     'Correctamente',
                    //     'success'
                    // );
                    axios.post('/user',this.dato).then(res=>{
                        console.log(res.data);
                        if (res.data=="EXISTENTE"){
                            this.$fire({
                                title: "EXISTENTE",
                                text: "Usted ya se encuentra registrado",
                                type: "info",
                                timer: 3000
                            })
                        }else{
                            this.$toast.open({
                                message: "Guardado Correctamnte",
                                type: "success",
                                duration: 2000,
                                dismissible: true
                            })
                            this.dato={};
                        }

                    });
                    // this.$toastr.s("Enviado correctamente");

                }
            })
        }
    },
    computed:{
        activar(){
            // console.log(this.dato.sexo=='Femenino' &&   this.dato.municipo=='Oruro');
            if (this.dato.sexo=='Femenino' &&  this.dato.municipio=='Oruro' ){
                return false;
            }else{
                return true;
            }
        }
    }
}
</script>
