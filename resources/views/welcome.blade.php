<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>


    <title>Vue JS</title>
  </head>
  <body>
    <h1>Vue JS</h1>

   <div id="app">
        <button type="button" class="btn btn-primary" v-on:click ='editing=true'>Edit</button>
        <button type="button" class="btn btn-warning" v-on:click = 'editing=false'>Cancel</button>
    <div>
        <h5>Items</h5>
        <ul>
            <li v-for='item in items'> 
                @{{ item }}
                <button type="button" class="btn btn-primary"
                 v-on:click='addToCart(item)'
                  v-if='editing'>add</button>
            </li>
        </ul>
    </div>

    <div>
        <h5> cart</h5>
        <ul>
            <li v-for='cart_item in cart'> @{{ cart_item }}
            <button type="button" class="btn btn-warning" v-if = 'editing' v-on:click='removeFromCart(cart_item)'>Remove</button>
        </li>
        </ul>
    </div>
    </div>
  

  </body>

    <script>
            var vm = new Vue({
                    el: '#app',
                    data:{
                        items: ['shoes','bags','hotdog','watch','pants'],
                        cart: [],
                        editing:false
                    },
                    methods:{
                        addToCart(item){
                            this.cart.push(item);
                            var index = this.items.indexOf(item);
                            this.items.splice(index, 1);

                        },
                        removeFromCart(item){
                            var index = this.cart.indexOf(item);
                            this.cart.splice(index,1);
                            this.items.push(item);
                        },



                    }
            })

        </script>

</html>