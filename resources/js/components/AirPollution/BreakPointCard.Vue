<template>                       
<!-- BREAK POINT card -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-background-cic">
                <h4 class="text-white">Puntos de ruptura (Break Points) para la Contaminación del Aire</h4>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-sm-4 col-lg-2" v-for="(cardBp, index) in arrayBreakPoint" :key="index">
                        <div class="card bg-secondary">
                            <div class="card-body">
                                <div class="text-value-lg">{{cardBp.bpmin}}-{{cardBp.bpmax}}</div>
                                <div v-text="cardBp.category"></div>
                                <div v-if="index==0 || index==1 || index==3 || index==5"><br><br>
                                </div>
                                <div class="progress progress-white progress-xs my-2">
                                <div class="progress-bar" role="progressbar" :style="`width: ${(index+1)*15}%`" aria-valuenow="10" 
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>                                                    
                        </div>
                    </div>
                 
                </div>

                <div class="row">
                    <small class="text-muted">Notas: </small><br>
                    <small class="text-muted" v-for="note in notesBreakPoint" v-text="note"></small><br>
                </div> 
            </div>
        </div>
    </div>
</div>
<!-- BREAK POINT CARD-->
</template>
<script>
    export default {
      props:[
          'arrayBreakPoint',
          'notesBreakPoint',
      ],
      data() {
        return { 
        }
      },
      methods: {
      },
      mounted() {
          
      }
    }
</script>