<template>
  <div class="main-content">
    {{sliders.length}} Sliders To Show
    <pre>
    {{sliders}}
  </pre>
  </div>
</template>
<script type="text/javascript">
export default {
  data(){
    return{
      sliders:[],
    }
  },
  created(){
    this.fetchDatas();
  },
  methods: {
      fetchDatas() {
        let self = this;
        let url ='/api/admin/sliders';
        axios.post(url)
          .then(function(response) {
            self.sliders = response.data;
          })
          .catch(function(error) {
            console.log(error);
          });

      },
  },
  }
</script>
