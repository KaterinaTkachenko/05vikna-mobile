<div class="modal fade" id="modal-call" tabindex="-1" role="dialog" aria-labelledby="modal-label" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title" id="modal-label">Заказать звонок</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="spinner justify-content-center">
                <div class="spinner-border" role="status">
                  <span class="sr-only">Loading...</span>
                </div>
            </div>
            <p class ="statusMsg text-center">Оставьте свой номер телефона. 
                <br>Мы перезвоним Вам в течении 2 минут.
            </p>
            <div class="col-lg-12 form-group" style="position: relative">
                <i class="fas fa-phone-alt"></i>
                <input type="tel" name="phone" id="phone_modal_call" class="phone form-control"  placeholder="Телефон*" required>
                <div class="invalid-feedback">
                    Обязательное поле
                </div>
            </div>
            <div class="col-lg-12 form-group text-center" style="margin-top: 20px">
                <button class="btn-main submitBtn" onclick="submitModal('Калькулятор онлайн', 'Кнопка', '#phone_modal_call', '#modal-call')">Заказать звонок</button>                  
            </div>
        </div>      
      </div>
    </div>
  </div>