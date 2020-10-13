<template>

<!-- Modal User Profile-->
  <div class="modal fade" id="userProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
          <div class="modal-content">
          <div class="modal-header bg-primary-cic">
              <h5 class="modal-title text-white" id="exampleModalScrollableTitle">Perfil</h5>
              <button @click="closeModal()" type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-3 card">
                      <div class="nav flex-column nav-pills">
                          <img class="img-profile img-fluid c-avatar-img" src="img/testimonials-1.jpg" alt="user@email.com">
                      </div>
                      <div class="nav nav-pills justify-content-center" role="tablist" aria-orientation="vertical">
                          <input type="file" onchange='update_span_name_image()' name="file-upload" id="file-upload" class="inputfile inputfile-5"/>
                          <label for="file-upload">
                              <figure>
                                  <svg xmlns="http://www.w3.org/2000/svg" class="iborrainputfile" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg>
                              </figure>
                          <span id="infospan" class="infospan">Elige una foto</span>
                          </label>   
                      </div>
                      <div class="nav flex-column nav-pills justify-content-center" role="tablist" aria-orientation="vertical">
                          <button class="btn btn-sm btn-success" type="submit"> Actualizar Foto</button>   
                      </div>
                      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                          <a class="nav-link active nav-linkio" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Información Personal</a>
                          <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Informacion educativa</a>
                          <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Cambiar contraseña</a>
                          <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Cambiar foto de perfil</a>
                      </div>
                  </div>
                  <div class="col-9 card">
                      <div class="tab-content" id="v-pills-tabContent">
                          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                              <div class="">
                                  <form method="" action="">                                      
                                      <div class="card-body p-4">
                                          <h1>Información Personal</h1>
                                          <p class="text-muted">Actualice su información</p>

                                          <label class="text-muted" for="name">Nombre (s)</label>
                                          <div class="input-group mb-3">                                              
                                              <div class="input-group-prepend"><span
                                                          class="input-group-text">
                                                          <i class="cil-user"></i>
                                                          </span>
                                              </div>
                                              <input id="name" v-model="name" type="text" class="form-control" placeholder="Nombre (s)"
                                                  required autocomplete="name" autofocus>                                                                                   
                                          </div>
                                          
                                          <label class="text-muted" for="">Apellidos</label> 
                                          <div class="input-group mb-3">  
                                              <div class="input-group-prepend"><span
                                                          class="input-group-text">
                                                          <i class="cil-user"></i>
                                                          </span>
                                              </div>
                                              <input id="surname" v-model="surname" type="text" class="form-control" placeholder="Apellidos" 
                                                required autocomplete autofocus>
                                          </div>

                                          <label class="text-muted" for="">Número de celular</label> 
                                          <div class="input-group mb-3">
                                              <div class="input-group-prepend"><span
                                                      class="input-group-text">
                                                      <i class="cil-phone"></i>
                                                  </span>
                                              </div>
                                              <input id="" v-model="cellphone" type="text" class="form-control"
                                              placeholder="Número de celular" autocomplete>
                                          </div>
                                          
                                          <label class="text-muted" for="">Edad</label> 
                                          <div class="input-group mb-3">
                                              <div class="input-group-prepend"><span  
                                                      class="input-group-text">
                                                      <i class="cil-list-numbered"></i>
                                                  </span>
                                              </div>
                                              <input id="edad" v-model="age" type="number" class="form-control col-4" min="0" max="100"
                                                 placeholder="Edad" autocomplete>
                                          </div>
                                          
                                          <label class="text-muted" for="">Sexo</label> 
                                          <div class="input-group mb-3">
                                              <div class="form-check form-check-inline">
                                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" v-model="sex" value="Masculino" :checked="sex=='Masculino'">
                                                  <label class="form-check-label" for="inlineRadio1">Masculino</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" v-model="sex" value="Femenino" :checked="sex=='Femenino'">
                                                  <label class="form-check-label" for="inlineRadio2">Femenino</label>
                                              </div>
                                          </div>

                                          <div class="input-group mb-3" v-show="errorPerson"> 
                                              <span v-for="(error, index) in errorShowMsgPerson" :key="index" class="text-danger text-center" role="alert">
                                                 <strong v-text="error"></strong>
                                              </span>
                                          </div>

                                          <button class="btn btn-block btn-coreui-home btn-lg" type="button" @click="updatePersonalData()">Actualizar                                
                                          </button>
                                      </div>
                                  </form>
                              </div>
                          </div>
                          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                              <div class="">
                                    <div class="card-body p-4">
                                        <h1>Información Extra</h1>
                                        <p class="text-muted">Actualice su información</p>

                                        <label class="text-muted" for="">Ocupación</label> 
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span
                                                        class="input-group-text">
                                                        <i class="cil-people"></i>
                                                        </span>
                                            </div>
                                            <select class="form-control" v-model="id_occupation">
                                                <option v-for="occupation in arrayOccupation" :key="occupation.id" :value="occupation.id" 
                                                v-text="occupation.name_occupation" :disabled="occupation.id===1" 
                                                data-toggle="tooltip" data-placement="right" :title="occupation.description">
                                            
                                                </option>
                                            </select>
                                        </div>
                                        
                                        <label class="text-muted" for="">Organización</label> 
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span
                                                    class="input-group-text">
                                                    <i class="cil-institution"></i>
                                                </span>
                                            </div>
                                            <input type="text" v-model="organization" class="form-control"
                                            placeholder="Organización">
                                        </div>

                                        <label class="text-muted" for="">Dirección</label> 
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span
                                                    class="input-group-text">
                                                    <i class="cil-house"></i>
                                                </span>
                                            </div>
                                            <input type="text" v-model="address" class="form-control"
                                            placeholder="Dirección">
                                        </div>

                                        <label class="text-muted" for="">Ciudad</label> 
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span
                                                        class="input-group-text">
                                                        <i class="cil-location-pin"></i>
                                                        </span>
                                            </div>
                                            <input type="text" v-model="city"  class="form-control" 
                                                placeholder="Ciudad" autofocus>
                                        </div>
                                        
                                        <label class="text-muted" for="">Correo electrónico</label> 
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span
                                                    class="input-group-text">
                                                    <i class="cil-envelope-open"></i>
                                                </span>
                                            </div>
                                            <input disabled type="text"  v-model="email" class="form-control"
                                            placeholder="Correo electrónico" required autocomplete>
                                        </div>

                                        <label class="text-muted" for="">Rol</label> 
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span
                                                    class="input-group-text">
                                                    <i class="cil-pencil"></i>
                                                </span>
                                            </div>
                                            <input disabled type="text" v-model="name_role" class="form-control"
                                            placeholder="Rol" value="" required >
                                        </div>

                                        <button class="btn btn-block btn-coreui-home btn-lg" type="button" @click="updateScholarData()">Actualizar                                
                                        </button>
                                    </div>
                              </div>
                          </div>
                          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                              <div class="">
                                    <div class="card-body p-4">
                                        <h1>Cambiar contraseña</h1>
                                        <p class="text-muted">Crea una nueva contraseña</p>
                                        
                                        <label class="text-muted">Contraseña Actual</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span
                                                    class="input-group-text">
                                                    <i class="cil-lock-unlocked"></i>
                                                </span>
                                            </div>
                                            <input type="password" v-model="password" class="form-control"
                                                placeholder="Contraseña Actual" name="email">
                                        </div>

                                        <label class="text-muted">Nueva Contraseña</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span
                                                    class="input-group-text">
                                                    <i class="cil-lock-locked"></i>
                                                </span>
                                            </div>
                                            <input id="password" type="password" v-model="new_password" class="form-control"
                                                placeholder="Nueva Contraseña" name="password" autocomplete="nueva contraseña">
                                        </div>

                                        <label class="text-muted">Confirmación de Contraseña</label>
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend"><span
                                                    class="input-group-text">
                                                    <i class="cil-lock-locked"></i>
                                                </span>
                                            </div>
                                            <input id="password-confirm" type="password" v-model="password_confirmation" class="form-control"
                                                placeholder="Confirma tu nueva contraseña"  name="password_confirmation" >                          
                                        </div>

                                        <div class="input-group mb-3" v-show="errorShowMsgPassword.length"> 
                                              <span v-for="(error, index) in errorShowMsgPassword" :key="index" class="text-danger text-center" role="alert">
                                                 <strong v-text="error"></strong>
                                              </span>
                                        </div>

                                        <button class="btn btn-block btn-coreui-home btn-lg" type="button" @click="updatePasswordData()">Actualizar                                
                                        </button>
                                    </div>
                              </div>
                          </div>
                          <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                              <div class="d-flex">
                                  <div class="card-body p-4">
                                      <h1>Cambiar foto de perfil</h1>
                                      <p class="text-muted">Elige una nueva foto</p>
                                      
                                      <div class="input-group mb-3 justify-content-center">
                                          <img class="img-profile img-fluid c-avatar-img" src="img/testimonials-1.jpg" alt="user@email.com">
                                      </div>
                                      
                                      <div class="nav nav-pills justify-content-center" role="tablist" aria-orientation="vertical">
                                          <input type="file" onchange='update_span_name_image()' name="file-upload" id="file-upload" class="inputfile inputfile-5"/>
                                          <label for="file-upload">
                                              <figure>
                                                  <svg xmlns="http://www.w3.org/2000/svg" class="iborrainputfile" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg>
                                              </figure>
                                          <span id="infospan" class="infospan">Elige una foto</span>
                                          </label>   
                                      </div>

                                      <div class="input-group mb-3 justify-content-center">
                                          <button class="btn btn-block btn-lg btn-success" type="submit"> Actualizar</button>                              
                                      </div>
                                      
                                  </div>
                              </div>                        
                          </div>

                      </div>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" @click="closeModal()" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
          </div>
      </div>
  </div>

</template>

<script>
    export default {
      props : [
        'id_user_props'
      ],
      data() {
        return {
          id_user : 0,
          name : '',
          surname : '',
          id_occupation : 0,
          name_occupation : '',
          occupation_description: '',
          address : '',
          cellphone : '',
          city : '',
          organization : '',
          age : 0,
          sex : '',
          url_photo : '',
          email : '',
          name_role : '',
          role_description: '',
          password : '',
          new_password : '',
          password_confirmation : '',
          confirm_password : '',
          arrayOccupation : [],
          arrayPerson : [],
          errorPerson : false,
          errorShowMsgPerson : [],
          errorShowMsgPassword: [],
        }
      },
      methods: {
        showProfileData(){
          console.log('llamando a show profile data')
          let me = this
          me.id_user = me.id_user_props
          var endPoint = `/user/showProfile?id=${me.id_user}`
          axios.get(endPoint).then(function (response){
             var data = response.data
             me.arrayPerson = data.user
             me.name = me.arrayPerson[0].name             
             me.surname = me.arrayPerson[0].surname
             me.cellphone = me.arrayPerson[0].cellphone
             me.age = me.arrayPerson[0].age
             me.sex = me.arrayPerson[0].sex
             me.name_occupation = me.arrayPerson[0].name_occupation
             me.id_occupation = me.arrayPerson[0].id_occupation
             me.address = me.arrayPerson[0].address
             me.city = me.arrayPerson[0].city
             me.email = me.arrayPerson[0].email
             me.name_role = me.arrayPerson[0].name_role
          })
          .catch(function (error){
             console.log(error)
          })
        },
        selectOccupation(){
                let me=this;
                var endPoint = '/occupation/selectOccupation';
                axios.get(endPoint).then(function (response) {
                        var data=response.data;
                        me.arrayOccupation=data.occupations;
                    })
                    .catch(function (error) {
                        // handle error
                        console.log(error);
                    });
        },
        updatePersonalData(){
            if(this.validatePersonalData()){
                return
            }

            let me=this

            let endPoint = '/user/updateDataPersonal'
            axios.put(endPoint,{
                'id' : this.id_user,
                'name' : this.name,
                'surname' : this.surname,
                'cellphone' : this.cellphone,
                'age' : this.age,
                'sex' : this.sex
            }).then(function (response){
                console.log("dentro de la promesa de axios:put")                
                Swal.fire({
                    icon: 'success',
                    title: 'Actualizado correctamente',
                    showConfirmButton: false,
                    timer: 1500
                })
                me.showProfileData()
            }).catch( function (error){
                 Swal.fire({
                    icon: 'error',
                    title: 'Intentelo de nuevo',
                    showConfirmButton: false,
                    timer: 1500
                })
                me.showProfileData()
            })
            
        },
        updateScholarData(){            
            let me=this

            let endPoint = '/user/updateScholarData'
            axios.put(endPoint,{
                'id' : this.id_user,
                'id_occupation' : this.id_occupation,
                'address' : this.address,
                'city' : this.city,
                'organization': this.organization,
            }).then(function (response){               
                Swal.fire({
                    icon: 'success',
                    title: 'Actualizado correctamente',
                    showConfirmButton: false,
                    timer: 1500
                })
                me.showProfileData()
            }).catch( function (error){
                 Swal.fire({
                    icon: 'error',
                    title: 'Intentelo de nuevo',
                    showConfirmButton: false,
                    timer: 1500
                })
                me.showProfileData()
            })
            
        },
        updatePasswordData(){
            if(this.validatePasswordData()){ 
                return
            }
            if(this.new_password !== this.password_confirmation){
                Swal.fire({
                    icon: 'error',
                    title: 'El campo confirmación de contraseña no coincide',
                    showConfirmButton: false,
                    timer: 1500
                })
                return
            }
            let me=this
            let endPoint = '/user/updatePasswordData'
            axios.put(endPoint,{
                'id' : this.id_user,
                'password' : this.password,
                'new_password' : this.new_password
            }).then(function (response){                
                let data = response.data
                console.log(data.msg)
                if(data.msg == 'Good'){
                    Swal.fire({
                        icon: 'success',
                        title: 'Contraseña actualizada correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    me.password = ''
                    me.new_password = ''
                    me.password_confirmation = ''
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'La contraseña actual no es correcta',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    me.password = ''
                }
                me.showProfileData()
            }).catch( function (error){
                Swal.fire({
                    icon: 'error',
                    title: 'Intentelo de nuevo',
                    showConfirmButton: false,
                    timer: 1500
                })
                me.showProfileData()
            })

        },
        validatePersonalData(){
            this.errorPerson=false
            this.errorShowMsgPerson=[]
            
            if (!this.name){
                this.errorShowMsgPerson.push("El nombre del usuario no puede estar vacío")
            }
            if (!this.surname){
                this.errorShowMsgPerson.push("El apellido del usuario no puede estar vacío")
            }
            if(this.age<0 || this.age>100){
                this.errorShowMsgPerson.push("Ingrese una edad válida")
            }

            if (this.errorShowMsgPerson.length){
                this.errorPerson=true
            }

            return this.errorPerson
        },
        validatePasswordData(){
            this.errorShowMsgPassword=[]

            if (!this.password){
                this.errorShowMsgPassword.push("El campo contraseña actual no puede estar vacío")
            }
            if (!this.new_password){
                this.errorShowMsgPassword.push("El campo nueva contraseña no puede estar vacío")
            }
            if(!this.password_confirmation){
                this.errorShowMsgPassword.push("El campo confirmación de contraseña no puede estar vacío")
            }
            if(this.new_password.length < 8){
                this.errorShowMsgPassword.push("El campo nueva contraseña debe contener al menos 8 caracteres")    
            }

            return this.errorShowMsgPassword.length ? true : false
        },
        closeModal(){
            this.showProfileData()
            this.errorPerson=false
            this.password = ''
            this.new_password = ''
            this.password_confirmation = ''
        }
      },
      mounted() {
            this.showProfileData(),this.selectOccupation()
      }
    }
</script>
