<!DOCTYPE html>
<html>
<head>
    <title>JavaScript View</title>




</head>

<body>

  <div id = "app">

  <button type="button" name="button" @click = "executeAndroid">Toast Button</button>

  </div>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js" charset="utf-8"></script>


<script>


new Vue({

el: '#app',
data(){

  return{


  }
},

methods:{


  executeAndroid(){

    console.log('executed')

      const message = "hello"

      const lengthLong = 1

      app.makeToast(message, lengthLong);

      return false;
  }


}

});
</script>
</body>
</html>
