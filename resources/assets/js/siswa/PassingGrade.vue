<template>
<section class="section">
  <div class="columns">
    <div class="column">	
        <div class="field">
            <label class="label" >Pilih Universitas</label>
            <div class="select">
                <select v-model="dt.univ" @change = updateTable(this.value)>
                    <option value="" selected disabled hidden>Choose here</option>
                    <option value="Institut Pertanian Bogor">Institut Pertanian Bogor</option>
                    <option value="Universitas Indonesia">Universitas Indonesia</option>
                    <option value="Institut Teknologi Bandung">Institut Teknologi Bandung</option>
                    <option value="Universitas Gadjah Mada">Universitas Gadjah Mada</option>
            </select>
            </div>
        </div>
    </div>
    <div class="column is-two-fifths">
        <div class="control has-icons-left">
            <input class="input" type="text" placeholder="Cari Jurusan">
            <span class="icon is-small is-left">
                <i class="fa fa-search" aria-hidden="true"></i>
            </span>
        </div>
    </div>

  </div>

  <table class="table is-hoverable is-fullwidth">
    <thead>
      <tr>
        <th><abbr title="nama_jurusan">Jurusan</abbr></th>
        <th><abbr title="passing_grade">Passing Grade</abbr></th>
      </tr>
    </thead>
    <tbody>
        <tr v-for="item,key in lists"
          :key="item.id">
            <td>{{item.nama_jurusan}}</td>
            <td>{{item.passing_grade}}</td>
        </tr>
    </tbody>
  </table>

</section>
</template>

<script>
  export default{
    data(){
      return {
        lists:{},
        dt:{
          univ:''
        }
      }
    },
    methods:{
      updateTable(event){
        axios.post('/getUniv',this.$data.dt)
          .then((response)=>this.lists = response.data)
          .catch((error) => this.errors = error.response.data.errors)
      }}
}
</script>