<html>
<head>
<style>
@import url('https://fonts.googleapis.com/css?family=Spartan&display=swap')

$form-bg: #f8f4e5
$form-border: #f45702
$form-shadow: #dfae4b
$form-focus: #6bd4b1
$font-size: 12pt
$font-face: 'Spartan'
$font-color: #2A293E

*
  margin: 0
  padding: 0

body
  background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/38816/image-from-rawpixel-id-2044837-jpeg.jpg") center center no-repeat
  background-size: cover
  width: 100vw
  height: 100vh
  display: grid
  align-items: center
  justify-items: center
  font-size: $font-size
  font-family: $font-face
  color: $font-color
  
.contact-us
  background: $form-bg
  padding: 50px 100px
  border-top: 10px solid $form-border

label, input, textarea
  display: block
  width: 100%
  font-size: $font-size
  line-height: $font-size * 2
  font-family: $font-face
    
input
  margin-bottom: $font-size * 2
    
h3
  font-weight: normal
  font-size: 10pt
  line-height: $font-size * 2
  font-style: italic
  margin: 0 0 .5em 0
    
span
  font-size: 8pt
  
em
  color: $form-border
  font-weight: bold
  
input, textarea
  border: none
  border: 1px solid rgba(0,0,0,.1)
  border-radius: 2px
  background: $form-bg
  padding-left: 5px
  outline: none
  
input:focus, textarea:focus
  border: 1px solid $form-focus
 
textarea
  resize: none
  
button
  display: block
  float: right
  line-height: $font-size * 2
  padding: 0 20px
  border: none
  background: $form-border
  color: white
  letter-spacing: 2px
  transition: .2s all ease-in-out
  border-bottom: 2px solid transparent
  outline: none
  
  &:hover
    background: inherit
    color: $form-border
    border-bottom: 2px solid $form-border
  
::selection 
  background: rgb(255, 199, 184)

input:-webkit-autofill,
input:-webkit-autofill:hover, 
input:-webkit-autofill:focus,
textarea:-webkit-autofill,
textarea:-webkit-autofill:hover,
textarea:-webkit-autofill:focus
  border: 1px solid $form-focus
  -webkit-text-fill-color: $font-color
  -webkit-box-shadow: 0 0 0px 1000px $form-bg inset
  transition: background-color 5000s ease-in-out 0s
  </style>
  </head>
  <body>
  .contact-us
  form action="#"
    label for="customerName"
      | NAME 
      em &#x2a;
    input type="text" id="customerName" name="customerName" required=""
    label for="customerEmail"
      | EMAIL 
      em &#x2a;
    input type="email" id="customerEmail" name="customerEmail" required=""
    label for="customerPhone" PHONE
    input type="tel" id="customerPhone" name="customerPhone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
    label for="orderNumber" ORDER NUMBER
    input type="text" id="orderNumber" name="orderNumber"
    label for="customerNote"
      | YOUR MESSAGE 
      em &#x2a;
    textarea rows="4" id="customerNote" name="customerNote" required=""
    h3 Please provide all the information about your issue you can.
    label for="spamProtection"
      | SPAM PROTECTION 
      em &#x2a; 
      span &nbsp;&nbsp;&nbsp;&nbsp;What day comes before July 11th?
    input type="text" id="spamProtection" name="spamProtection"
    button  id="customerOrder" SUBMIT
  </body>
  </html>