<template>
  <div class="main-content">
    <div class="page-header">
      <h3 class="page-title">Sliders Demo </h3>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Basic UI</a></li>
        <li class="breadcrumb-item active">Cards</li>
      </ol>
    </div>
    <div class="card">
      <div class="card-body">
        <h3> Sliders </h3>
        <span> {{sliders.length}} Sliders On Cloud </span>
      </div>
      <div class="card-body">
        <h3> Slider Form </h3>

        <div class="form-group">
          <label for=""> Title </label>
          <input name="" class="form-control" v-model="slider.title">
        </div>
        <div class="form-group">
          <label for=""> Description </label>
          <input name="" class="form-control" v-model="slider.description">
        </div>
        <div class="form-group">
          <label for=""> Image </label>
          <input name="" class="form-control" vlaue="image.jpg" v-model="slider.image">
        </div>
        <div class="form-group">
          <button class="btn btn-success" @click="saveSlider"> Save</button>
        </div>

      </div>
    </div>
  </div>
</template>
<script type="text/javascript">
export default {
  data(){
    return{
      sliders:[],
      slider:{
        title:'',
        description:'',
        image:'',
      },
    }
  },
  created(){
    this.fetchDatas();
  },
  methods: {
    saveSlider(){
        var self = this
        var formData = self.slider
        var url = '/api/admin/slider'
        axios.post(url,formData).then(r=>{
          // console.log(r)
          self.sliders.push(r.data)
        });
    },
      fetchDatas() {
        let self = this;
        let url ='/api/admin/sliders';
        axios.post(url)
          .then(function(response) {
            self.sliders = response.data.data;
          })
          .catch(function(error) {
            console.log(error);
          });

      },
  },
  }
</script>
