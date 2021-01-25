import Vue from 'vue';
const axios = require('axios').default;


var app = new Vue({
  el: "#app",
  data:{
    disks:[]
  },
  mounted:function (){
    const self = this;
    axios
    .get("partial/element.php").then(function (response){
      console.log(response.data)
      self.disks = response.data;

    })
    console.log(self.disks);
  }
})
