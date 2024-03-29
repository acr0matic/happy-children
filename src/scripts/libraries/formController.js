'use strict';

class Form {
  constructor(form) {
    this.form = form;

    this.phone = form.querySelector('input[type=tel]');
    this.date = form.querySelector('input[name=user_date]');
    this.file = form.querySelector('.dropzone');
    this.action = form.getAttribute('action');
    this.redirect = form.getAttribute('data-redirect');

    this.submit = form.querySelector('button[type=submit]');
    this.fields = form.querySelectorAll('.input__field');
    this.required = form.querySelectorAll('[data-required]');
    this.dropzone = null;

    this.buttonDefault = this.submit.innerHTML;

    this.ValidateExpression = {
      phone: /^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){11}(\s*)?$/,
      name: /^[a-zA-Zа-яА-Я ]+$/,
      message: /.{6,}/,
      date: /[0-9]{2}\.[0-9]{2}\.[0-9]{4}/,
      age: /(^[0-9]{0,3}$)/,
      email: /(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/,
    }

    this.Mask();
    this.Listener();
  }

  Mask() {
    // Маска для номера телефона
    if (this.phone) IMask(this.phone, {
      mask: '+{7} (000) 000-00-00',
      prepare: (appended, masked) => ((appended === '8' && masked.value === '') ? '' : appended),
    });

    if (this.file) {
      this.dropzone = new Dropzone(this.file, {
        url: this.action,
        method: 'put',
        addRemoveLinks: true,

        dictDefaultMessage: "Перетащите резюме сюда, либо <br> нажмите, чтобы добавить",
        dictCancelUpload: 'Отменить',
        dictRemoveFile: 'Удалить',
        dictMaxFilesExceeded: 'Превышен лимит',

        uploadMultiple: true,
        paramName: 'resume',
        maxFiles: 1,
        maxFilesize: 8192,
      });

    }

    if (this.date) {
      IMask(this.date, {
        mask: Date,
        min: new Date(1990, 0, 1),
        max: new Date(),
      });
    }
  }

  Listener() {
    this.form.addEventListener('submit', (e) => {
      e.preventDefault();

      if (this.CheckRequired() & this.InputValidate()) {
        this.submit.innerHTML = this.submit.getAttribute('data-sending');
        this.submit.setAttribute('disabled', 'disabled');
        this.form.classList.add('form--sending');

        this.Send();
      }
    });

    // Убрать ошибку при клике
    this.fields.forEach(input => {
      input.addEventListener('click', this.RemoveError(input));
    });
  }

  CheckRequired() {
    let isValid = true;

    this.required.forEach(field => {
      if (field.value === '') {
        field.parentNode.classList.add('input--error');
        isValid = false;
      }
    });

    return isValid;
  }

  InputValidate() {
    let isValid = true;

    const input_phone = this.form.querySelectorAll('input[type=tel]');
    const input_name = this.form.querySelectorAll('input[name=user_name], input[name=user_child]')
    const input_date = this.form.querySelectorAll('input[name=user_date]');
    const input_message = this.form.querySelectorAll('textarea[name=user_message]')

    const Validate = (field, type) => {
      if (!field.value.match(this.ValidateExpression[type])) {
        this.AddError(field);
        isValid = false;
      }
    }

    input_phone.forEach(input => Validate(input, 'phone'));
    input_name.forEach(input => {
      if (input.hasAttribute('data-required')) Validate(input, 'name')
      else if (input.value !== '') Validate(input, 'name')
    });

    input_date.forEach(input => {
      if (input.value !== '') Validate(input, 'date')
    });

    input_message.forEach(input => {
      if (input.value !== '') Validate(input, 'message')
    });

    return isValid;
  }

  // Функция: убрать ошибку при клике
  RemoveError(field) {
    return () => field.parentNode.classList.remove('input--error');
  }

  // Функция: Добавить ошибку
  AddError(field) {
    field.parentNode.classList.add('input--error');
  }

  // Функция: Отправляем письмо
  async Send() {
    const data = new FormData(this.form);

    const target = this.form.getAttribute('data-target');
    const additional = this.form.getAttribute('data-additional');

    data.append('target', target);
    if (additional) data.append('additional', additional);

    if (this.dropzone) this.dropzone.files.forEach(file => data.append('resume[]', file));

    try {
      let response = await fetch(this.action, {
        method: 'POST',
        body: data,
      });

      if (response.ok)
        if (this.redirect) window.location.href = this.redirect;

      let result = await response.json();
      console.log(result);

      this.Clear();
    }

    // Логируем ошибку, если возникла
    catch (error) {
      console.error('Ошибка: ' + error);
    }

    // В любом случае убрать стили "отправки"
    finally {
      this.submit.removeAttribute('disabled');
      this.submit.parentNode.classList.remove('form__action--sending');
      this.submit.innerHTML = this.buttonDefault;
    }
  }

  // Функция: Очистка формы
  Clear() {
    this.fields.forEach(field => field.value = '');
  }
}