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
                    <div class="col-md-3 mb-3">
                        <label for="Dirección">Dirección Actual</label>
                        <input type="text" class="form-control" v-bind:class="dato.direccion==null?'':dato.direccion==''?'is-invalid':'is-valid'" v-model="dato.direccion" id="Dirección" placeholder="Dirección" required>
                        <div class="valid-feedback">
                            Bien!
                        </div>
                        <div class="invalid-feedback">
                            Dato necesario!
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="email">Correo electronico</label>
                        <input type="text" class="form-control" v-bind:class="dato.email==null?'':dato.email==''?'is-invalid':'is-valid'" v-model="dato.email" id="email" placeholder="email" required>
                        <div class="valid-feedback">
                            Bien!
                        </div>
                        <div class="invalid-feedback">
                            Dato necesario!
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="Colegio" style="width: 100%;display: flex;justify-content: space-between">
                            <div>Colegio</div>
                            <small v-if="!escribir" @click="escribir=!escribir">Escribir</small>
                            <small v-if="escribir" @click="escribir=!escribir">Selecccionar</small>
                        </label>
                        <!--                        <select id="Colegio"  required>-->
                        <!--                            <option value="3ro de Secundaria">3ro de Secundaria</option>-->
                        <!--                            <option value="4to de Secundaria">4to de Secundaria</option>-->
                        <!--                            <option value="5to de Secundaria">5to de Secundaria</option>-->
                        <!--                            <option value="6to de Secundaria">6to de Secundaria</option>-->
                        <!--                        </select>-->
                        <input v-if="escribir" type="text" required class="form-control" v-bind:class="dato.colegio==null?'':dato.colegio==''?'':'is-valid'" v-model="dato.colegio">

                        <select v-if="!escribir" name="colegio" required id="colegio" class="form-control" v-bind:class="dato.colegio==null?'':dato.colegio==''?'':'is-valid'" v-model="dato.colegio">
                            <option value="">Selecionar</option>
                            <option value="ADOLFO BALLIVIAN 1">ADOLFO BALLIVIAN 1</option>
                            <option value="ADVENTISTA ELENA G. DE WHITE">ADVENTISTA ELENA G. DE WHITE</option>
                            <option value="ALCIRA CARDONA TORRICO 2">ALCIRA CARDONA TORRICO 2</option>
                            <option value="ALEMAN">ALEMAN</option>
                            <option value="AMERICANO">AMERICANO</option>
                            <option value="ANGLO AMERICANO">ANGLO AMERICANO</option>
                            <option value="ANICETO ARCE SECUNDARIA">ANICETO ARCE SECUNDARIA</option>
                            <option value="ANTOFAGASTA">ANTOFAGASTA</option>
                            <option value="ANTONIO JOSE DE SAINZ">ANTONIO JOSE DE SAINZ</option>
                            <option value="ARRIETA">ARRIETA</option>
                            <option value="BETHANIA">BETHANIA</option>
                            <option value="BOLIVIA">BOLIVIA</option>
                            <option value="BOLIVIA DE VINTO SECUNDARIA">BOLIVIA DE VINTO SECUNDARIA</option>
                            <option value="CARMEN GUZMAN DE MIER 1">CARMEN GUZMAN DE MIER 1</option>
                            <option value="CATOLICO SAN FRANCISCO">CATOLICO SAN FRANCISCO</option>
                            <option value="CENTRO DE INFORMATICA SAN MIGUEL">CENTRO DE INFORMATICA SAN MIGUEL</option>
                            <option value="COMIBOL ORURO 2">COMIBOL ORURO 2</option>
                            <option value="DON BOSCO">DON BOSCO</option>
                            <option value="DONATO VASQUEZ">DONATO VASQUEZ</option>
                            <option value="EJERCITO NACIONAL SECUNDARIO">EJERCITO NACIONAL SECUNDARIO</option>
                            <option value="EVANGELICO  WILLIAM BOOTH">EVANGELICO  WILLIAM BOOTH</option>
                            <option value="EVANGELICO FILADELFIA">EVANGELICO FILADELFIA</option>
                            <option value="FERROVIARIA SECUNDARIA">FERROVIARIA SECUNDARIA</option>
                            <option value="FRANCISCO FAJARDO 2">FRANCISCO FAJARDO 2</option>
                            <option value="GENOVEVA JIMENEZ">GENOVEVA JIMENEZ</option>
                            <option value="GUIDO VILLAGÓMEZ SECUNDARIO">GUIDO VILLAGÓMEZ SECUNDARIO</option>
                            <option value="HIJOS DEL SOL 2">HIJOS DEL SOL 2</option>
                            <option value="IGNACIO LEON  2">IGNACIO LEON  2</option>
                            <option value="ILDEFONSO MURGUIA">ILDEFONSO MURGUIA</option>
                            <option value="INSCO SECUNDARIA">INSCO SECUNDARIA</option>
                            <option value="JESUS DE NAZARETH  2">JESUS DE NAZARETH  2</option>
                            <option value="JESUS DE NAZARETH SECUNDARIA">JESUS DE NAZARETH SECUNDARIA</option>
                            <option value="JESUS-MARIA 2">JESUS-MARIA 2</option>
                            <option value="JHON FITZGERALD KENNEDY 2">JHON FITZGERALD KENNEDY 2</option>
                            <option value="JHON FITZGERALD KENNEDY 3">JHON FITZGERALD KENNEDY 3</option>
                            <option value="JORGE OBLITAS SECUNDARIA">JORGE OBLITAS SECUNDARIA</option>
                            <option value="JOSE MARIA SIERRA GALVARRO">JOSE MARIA SIERRA GALVARRO</option>
                            <option value="JUAN LECHIN OQUENDO">JUAN LECHIN OQUENDO</option>
                            <option value="JUAN MISAEL SARACHO SECUNDARIA">JUAN MISAEL SARACHO SECUNDARIA</option>
                            <option value="JUAN PABLO SECUNDARIA">JUAN PABLO SECUNDARIA</option>
                            <option value="JUANA AZURDUY DE PADILLA SECUNDARIA">JUANA AZURDUY DE PADILLA SECUNDARIA</option>
                            <option value="LA KANTUTA 3">LA KANTUTA 3</option>
                            <option value="LA SALLE">LA SALLE</option>
                            <option value="LA SALLE TARDE">LA SALLE TARDE</option>
                            <option value="LANI">LANI</option>
                            <option value="LOS ANGELES DE NAZARIA IGNACIA">LOS ANGELES DE NAZARIA IGNACIA</option>
                            <option value="LUIS MARIO CAREAGA 2">LUIS MARIO CAREAGA 2</option>
                            <option value="MARCELO QUIROGA SANTA CRUZ">MARCELO QUIROGA SANTA CRUZ</option>
                            <option value="MARCOS BELTRAN AVILA SECUNDARIA">MARCOS BELTRAN AVILA SECUNDARIA</option>
                            <option value="MARIA QUIROZ SECUNDARIA">MARIA QUIROZ SECUNDARIA</option>
                            <option value="MARISCAL SUCRE SECUNDARIO">MARISCAL SUCRE SECUNDARIO</option>
                            <option value="MISAEL PACHECO LOMA SECUNDARIO">MISAEL PACHECO LOMA SECUNDARIO</option>
                            <option value="NACIONAL BOLIVIA">NACIONAL BOLIVIA</option>
                            <option value="NACIONAL MIXTO HUAJARA">NACIONAL MIXTO HUAJARA</option>
                            <option value="NACIONAL SAN JOSE">NACIONAL SAN JOSE</option>
                            <option value="NACIONES UNIDAS">NACIONES UNIDAS</option>
                            <option value="NINO QUIRQUINCHO FELIZ">NINO QUIRQUINCHO FELIZ</option>
                            <option value="NUESTRA SENORA DEL SOCAVON 2">NUESTRA SENORA DEL SOCAVON 2</option>
                            <option value="ORURO SECUNDARIA">ORURO SECUNDARIA</option>
                            <option value="OSCAR UNZAGA DE LA VEGA 2">OSCAR UNZAGA DE LA VEGA 2</option>
                            <option value="PANTALEON DALENCE 1">PANTALEON DALENCE 1</option>
                            <option value="PANTALEON DALENCE JIMENEZ">PANTALEON DALENCE JIMENEZ</option>
                            <option value="REEKIE">REEKIE</option>
                            <option value="ROTARIA ORURO OTTAWA">ROTARIA ORURO OTTAWA</option>
                            <option value="SAN IGNACIO DE LOYOLA">SAN IGNACIO DE LOYOLA</option>
                            <option value="SAN MIGUEL">SAN MIGUEL</option>
                            <option value="SANTA CLAUDINA THEVENET">SANTA CLAUDINA THEVENET</option>
                            <option value="SANTA MARÍA MAGDALENA POSTEL">SANTA MARÍA MAGDALENA POSTEL</option>
                            <option value="SANTA ROSA 2">SANTA ROSA 2</option>
                            <option value="SEBASTIAN PAGADOR 2">SEBASTIAN PAGADOR 2</option>
                            <option value="SIMÓN BOLÍVAR SECUNDARIA">SIMÓN BOLÍVAR SECUNDARIA</option>
                            <option value="UNIÓN  BOLIVIA  JAPÓN">UNIÓN  BOLIVIA  JAPÓN</option>
                            <option value="VIRGEN DEL MAR 3">VIRGEN DEL MAR 3</option>
                        </select>
                        <div class="valid-feedback">
                            Bien!
                        </div>
                        <div class="invalid-feedback">
                            Dato necesario!
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="Curso que cursa">Curso que cursa</label>
                        <select id="Curso que cursa" class="form-control" v-bind:class="dato.curso==null?'':dato.curso==''?'':'is-valid'" v-model="dato.curso" required>
                            <option value="2do de Secundaria">2do de Secundaria</option>
                            <option value="3ro de Secundaria">3ro de Secundaria</option>
                            <option value="4to de Secundaria">4to de Secundaria</option>
                            <option value="5to de Secundaria">5to de Secundaria</option>
                            <option value="6to de Secundaria">6to de Secundaria</option>
                        </select>
                        <div class="valid-feedback">
                            Bien!
                        </div>
                        <div class="invalid-feedback">
                            Dato necesario!
                        </div>
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
                        <div class="form-check" v-if="dato.curso=='2do de Secundaria'||dato.curso=='3ro de Secundaria'||dato.curso=='4to de Secundaria'||dato.curso=='5to de Secundaria'">
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

                <div class="col-md-12 mb-12">
                    <blockquote class="blockquote">
                        <p class="mb-0">III. CAPACITACIÓN</p>
                        <footer class="blockquote-footer">
                            La capacitación se llevará a cabo por la plataforma virtual de la carrera de Ingeniería de Sistemas e Ingeniería
                            Informática.
                        </footer>
                    </blockquote>
                </div>

                    <div class="col-md-4 mb-4">
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
                    <div class="col-md-4 mb-4 text-center">
                        <img src="img/tigo.jpg" width="100" alt="..." class="img-thumbnail">
                    </div>
                    <div class="col-md-4 mb-4">
                        <label><b>Subir fotografia del pago?</b></label>
                        <input type="file" class="form-control" @change="updateFile">
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
            dato:{},
            escribir:false,
            imagen:null,
        }
    },
    mounted() {
        console.log('Component mounted.');
    },
    methods:{
        updateFile(e){
            this.imagen=e.target.files[0];
        },
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
                    let data= new FormData();
                    data.append('paterno',this.dato.paterno)
                    data.append('materno',this.dato.materno)
                    data.append('nombres',this.dato.nombres)
                    data.append('fechanac',this.dato.fechanac)
                    data.append('sexo',this.dato.sexo)
                    data.append('ci',this.dato.ci)
                    data.append('fijo',this.dato.fijo)
                    data.append('celular',this.dato.celular)
                    data.append('direccion',this.dato.direccion)
                    data.append('curso',this.dato.curso)
                    data.append('programacion',this.dato.programacion)
                    data.append('robotica',this.dato.robotica)
                    data.append('capacitacion',this.dato.capacitacion)
                    data.append('colegio',this.dato.colegio)
                    data.append('foto',this.imagen)
                    data.append('email',this.dato.email)

                    axios.post('/user',data).then(res=>{
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
