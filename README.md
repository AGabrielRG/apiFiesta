# apiFiesta



script
----------------------------------------------------------------------------
function cargarContadores(){
    $('.counter-value').each(function(){
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        },{
            duration: 3500,
            easing: 'swing',
            step: function (now){
                $(this).text(Math.ceil(now));
            }
        });
    });
}

php
/-----------------------------------------------------------------
  <br>
  <div class="container ">
  <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="counter green">
                        <span class="counter-value">1963</span>
                        <div class="counter-content">
                            <h3>Confirmados</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter green">
                        <span class="counter-value">1854</span>
                        <div class="counter-content">
                            <h3>Pases Confirmados</h3>
                        </div>
                    </div>
                </div>              
                <div class="col-md-3 col-sm-6">
                    <div class="counter orange">
                        <span class="counter-value">1823</span>
                        <div class="counter-content">
                            <h3>No Asistira</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="counter orange">
                        <span class="counter-value">1823</span>
                        <div class="counter-content">
                            <h3>Pases no Asistira</h3>
                        </div>
                    </div>
                </div>
      </div>
      <div class="row text-center">
      <div class="col-md-12 col-sm-6">
                    <div class="counter">
                        <span class="counter-value">1756</span>
                        <div class="counter-content">
                            <h3>En espera</h3>
                        </div>
                    </div>
                </div>
      </div>
    </div>
