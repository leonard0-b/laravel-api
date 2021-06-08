const { default: Axios } = require("axios");

Vue.config.devtools = true;

var app = new Vue (
  {
    el: "#root",
    data: {
        campioni: [],
    },
    mounted() {
        this.getChampion();
      },
    methods: {
        getChampion: function(){
            axios.get("http://localhost:8000/api/champions")
            .then((response) => {
                console.log(response.data.data);
                this.campioni = response.data.data;
            })
        }
    }
  });