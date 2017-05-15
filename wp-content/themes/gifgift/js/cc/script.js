(function() {
  var ccnum  = document.getElementById('cardNumber'),
      visa  = document.getElementById('visa'),
      mastercard  = document.getElementById('mastercard'),
      amex  = document.getElementById('amex'),
      type   = document.getElementById('credit_cards'),
      expiry = document.getElementById('expiration-datee'),
      cvc    = document.getElementById('cvv'),
      submit = document.getElementById('submit_button'),
      result = document.getElementById('result');

  payform.cardNumberInput(ccnum);
  payform.expiryInput(expiry);
  payform.cvcInput(cvc);

  ccnum.addEventListener('input',   updateType);

  submit.addEventListener('click', function() {
    var valid     = [],
        expiryObj = payform.parseCardExpiry(expiry.value);

    valid.push(fieldStatus(ccnum,  payform.validateCardNumber(ccnum.value)));
    valid.push(fieldStatus(expiry, payform.validateCardExpiry(expiryObj)));
    valid.push(fieldStatus(cvc,    payform.validateCardCVC(cvc.value, type.innerHTML)));

    result.className = 'emoji ' + (valid.every(Boolean) ? 'valid' : 'invalid');
  });

  function updateType(e) {
     amex.classList.remove('transparent');
        visa.classList.remove('transparent');
        mastercard.classList.remove('transparent');
    var cardType = payform.parseCardType(e.target.value);
        if (cardType == 'visa') {
            mastercard.classList.add('transparent');
            amex.classList.add('transparent');
        } else if (cardType == 'amex') {
            mastercard.classList.add('transparent');
            visa.classList.add('transparent');
        } else if (cardType == 'mastercard') {
            amex.classList.add('transparent');
            visa.classList.add('transparent');
        }
    //type.innerHTML = cardType || 'invalid';
  }


  function fieldStatus(input, valid) {
    if (valid) {
      removeClass(input.parentNode, 'error');
    } else {
      addClass(input.parentNode, 'error');
    }
    return valid;
  }

  function addClass(ele, _class) {
    if (ele.className.indexOf(_class) === -1) {
      ele.className += ' ' + _class;
    }
  }

  function removeClass(ele, _class) {
    if (ele.className.indexOf(_class) !== -1) {
      ele.className = ele.className.replace(_class, '');
    }
  }
})();