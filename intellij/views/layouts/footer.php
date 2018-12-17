
<section id="contact" class="bg-dark text-white">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Наши контакты</h2>
            <hr class="my-4">
            <p class="mb-5">Подпишитесь на наши соц сети, что бы всегда быть в курсе всех спец-предложений и акций</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-paper-plane fa-3x mb-3 sr-contact"></i>
            <p>@IntelliJ</p>
          </div>
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-vk fa-3x mb-3 sr-contact"></i>
            <p>IntelliJ Shop</p>
          </div>
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-facebook fa-3x mb-3 sr-contact"></i>
            <p>IntelliJ Shop</p>
          </div>

    </section>

 



<script src="/template/js/jquery.js"></script>
<script src="/template/js/jquery.cycle2.min.js"></script>
<script src="/template/js/jquery.cycle2.carousel.min.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<script src="/template/js/jquery.scrollUp.min.js"></script>
<script src="/template/js/price-range.js"></script>
<script src="/template/js/jquery.prettyPhoto.js"></script>
<script src="/template/js/main.js"></script>
<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>

</body>
</html>