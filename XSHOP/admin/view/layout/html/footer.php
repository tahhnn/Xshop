
<style>
    *{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
header{
    text-align: center;
    height: 50px;
    background-color: rgb(196, 221, 160);
    padding-top: 10px;
}
.nav-navigation{
    margin-top: 10px;
    background: black;
    height: 50px;
}
.ul-navigation{
    padding: 10px;
    display: flex;
}
.li-navigation{
    list-style: none;
    margin-left: 50px;
}
.nav-navigation a{ 
    text-decoration: none;
    color: white;
    padding: auto;
}


.div-img {
    position: relative;
    width: 100%;
    height: 400px;
}

.div-img .img-slide {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
}

.div-img .active {
    width: 100%;
    opacity: 1;
}
.div-content-left{

margin-top: 10px;
}
.div-content-left{
width: 75%;
float: left;
}
.div-right-content{
    width: 22%;
    float: right;
    padding-top: 10px;
}
/* product  */
.div-product-main{
    width: 75%;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 30px;
   
    margin: 20px auto ;
}
.div-list{
    border: 1px solid black;
    padding: 10px;
 
}
.div-product .div-product-img{
    height: 200px;
   
}
.button-buy{
    display: block;
    margin: 0 auto;
}
.div-button-list-product{
  display: flex;
    justify-content: center;
}
.button-list-product{
    margin: 10px;
}
.div-login{
    padding-left: 5px;
    height: 400px;
    border:  1px solid black;
}
.button-login {
    display: block;
    border:1px solid black;
    margin: 0 auto;
}
.form-control{
    position: relative;
}
.input-checkbox{
    position: absolute;
    right: 121px;
    top: 13px;
}
a{
    text-decoration: none;
}
.div-list{
   
    margin-top:10px;
    border: 1px solid black;
}
.ul-list {
    padding-top: 10px;
    margin-top: 5px;
    
}
.li-list{
    list-style: none;
}
a{
    margin: auto;
    color: black;
}
.div-top{
    margin-top:10px;
    border: 1px solid black;
}


</style>
</body>

</html>