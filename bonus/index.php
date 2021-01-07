<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php bonus exercise</title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>

    <div id="app">
      <div class="box" v-for="hotel in hotels">
        <h1>{{ hotel.name }}</h2>
        <p> {{ hotel.description }}</p>
        <ul>
          <li>Voto : {{hotel.vote}} / 5</li>
          <li v-if="hotel.parking">Con parcheggio</li>
          <li v-else>Senza Parcheggio</li>
          <li>distanza dal centro : {{hotel.distance_to_center}} km</li>
        </ul>
      </div>
    </div>

    <script type="text/javascript" src="script.js"></script>
  </body>
</html>
