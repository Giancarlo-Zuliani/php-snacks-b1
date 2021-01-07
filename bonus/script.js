var app = new Vue({
  el: '#app',
  data: {
    hotels: []
  },

  mounted: function () {
    axios
    .get('data.php')
    .then(risposta => {
      this.hotels = risposta.data;
      console.log(this.hotels);
    });
  },
})
