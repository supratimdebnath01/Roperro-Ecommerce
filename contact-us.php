<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>From the house of Roperro</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php include "header-includes.php";?>

  <!-- form validation  -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <link rel="stylesheet" href="assets/css/toastr.css">


   <!-- Google Recaptcha JS -->
   <script src="https://www.google.com/recaptcha/api.js" async defer></script>


</head>

<body>

  <?php include "header.php";?> 
  
  <main id="main">

  <section class="contact-service">
    <div class="container">
        <div class="row">
            <h2 class="secondary-font">CUSTOMER SERVICES</h2>
        </div>
    </div>
  </section>
    <!-- ========================= Contact form section ==================== -->

    <!-- For desktop  -->
    <section class="contact-us-form-desktop">
        <div class="container">
          <div class="row">
              <div class="contact-sec-heading1">
                <h2>Get In Touch</h2>
                <p>We will respond to every email within 24 hours, Monday to Friday, excluding holidays. You can also call us at our What’s app number <a href="tel:+919773913767" class="detail-contact-phone">+91 9773913767</a></p>
              </div>
              <form class="row justify-content-between" action="" method="POST" id="formvalid">
                <div class="col-5 mb-4">
                  <label for="first-name1" class="form-label form-head">First Name</label>
                  <input type="text" class="form-control form-control-lg transparent-input" id="first-name1" name="name1" required>
                </div>
                <div class="col-5 mb-4">
                  <label for="last-name1" class="form-label form-head">Last Name</label>
                  <input type="text" class="form-control form-control-lg transparent-input" id="last-name1" name="name2" required>
                </div>
                <div class="col-5 mb-4">
                  <label for="number1" class="form-label form-head">Phone</label>
                  <input type="number" class="form-control form-control-lg transparent-input" id="number1"  required number>
                </div>
                <div class="col-5 mb-4">
                  <label for="email1" class="form-label form-head">Email Address</label>
                  <input type="email" class="form-control form-control-lg transparent-input" id="email1" name="email" required>
                </div>
                <div class="col-12 mb-4">
                  <label for="subject1" class="form-label form-head">Subject</label>
                  <input type="text" class="form-control form-control-lg transparent-input" id="subject1" name="comment1" required>
                </div>
                <div class="mb-3 mb-4">
                  <label for="message1" class="form-label form-head">Message</label>
                  <textarea type="text" class="form-control transparent-input" id="message1" name="comment2" rows="3" required></textarea>
              </div>
              <!-- <div class="g-recaptcha" data-sitekey="6LeXdbEgAAAAAIC1i1D1gUSS3DAVgRBOPl5XW63Y"></div> -->
              <div class="mt-4">
                <button href="" class="yellow-btn2" type="submit" value="Submit" id="submit-btn1">Send</button>
              </div>
              </form>
          </div>
          
        </div>
    </section>  <!-- For desktop ends  -->
      
    <!-- For Mobile  -->
    <section class="contact-us-form-mobile">
        <div class="container">
          <div class="row">
              <div class="contact-sec-heading1">
                <h2>Get In Touch</h2>
                <p>We will respond to every email within 24 hours, Monday to Friday, excluding holidays. You can also call us at our What’s app number <a href="tel:+919773913767" class="detail-contact-phone">+91 9773913767</a></p>
              </div>
              <form class="row justify-content-between" action="" method="POST" id="formvalid-mob">
                <div class="col-12 mb-4">
                  <label for="first-name2" class="form-label form-head">First Name</label>
                  <input type="text" class="form-control form-control-lg transparent-input" id="first-name2" name="name1" required>
                </div>
                <div class="col-12 mb-4">
                  <label for="last-name2" class="form-label form-head">Last Name</label>
                  <input type="text" class="form-control form-control-lg transparent-input" id="last-name2" name="name2" required>
                </div>
                <div class="col-12 mb-4">
                  <label for="number2" class="form-label form-head">Phone</label>
                  <input type="number" class="form-control form-control-lg transparent-input" id="number2" required number>
                </div>
                <div class="col-12 mb-4">
                  <label for="email2" class="form-label form-head">Email Address</label>
                  <input type="email" class="form-control form-control-lg transparent-input" id="email2" name="email" required>
                </div>
                <div class="col-12 mb-4">
                  <label for="subject2" class="form-label form-head">Subject</label>
                  <input type="text" class="form-control form-control-lg transparent-input" id="subject2" name="comment1" required>
                </div>
                <div class="mb-3 mb-4">
                  <label for="message2" class="form-label form-head">Message</label>
                  <textarea class="form-control transparent-input" id="message2" name="comment2" rows="3" required></textarea>
              </div>
              <!-- <div class="g-recaptcha" data-sitekey="6LeXdbEgAAAAAIC1i1D1gUSS3DAVgRBOPl5XW63Y"></div> -->
              <div class="mt-4">
                <button href="" class="yellow-btn2-mobile" type="submit" value="Submit" id="submit-btn2">Send</button>
              </div>
              </form>
          </div>
        </div>
    </section> <!-- For mobile ends  -->

    <!-- =================== Contact Details ======================= -->
    <section class="contact-details">
       <div class="container">
          <div class="row">
              <div class="col-lg-4 col-sm-4">
                <div class="right-div">
                <div class="link1">
                <a href=""><img src="assets/img/contact_us/phone.svg" alt=""></a>  
                <h4>Phone</h4>
                </div> 
                <div class="detail-contact">
                  <p><a href="tel:+919773913767" class="detail-contact-phone">1234567898</a></p>
                </div> 
                </div>             
              </div>
              <div class="col-lg-4 col-sm-4">
                <div class="right-div">
                <div class="link1">
                <a href=""><img src="assets/img/contact_us/email.svg" alt=""></a>  
                <h4>Email</h4>
                </div> 
                <div class="detail-contact">
                  <p><a href="mailto:abcs@tcgh.com" class="detail-contact-phone">abcs@tcgh.com</a></p>
                </div> 
                </div>             
              </div>
              <div class="col-lg-4 col-sm-4">
                <div class="link1">
                <a href=""><img src="assets/img/contact_us/address.svg" alt=""></a>  
                <h4>Address</h4>
                </div> 
                <div class="detail-contact">
                  <p><a href="https://goo.gl/maps/hKJACmHVsg5ARrYH9" target="_blank" class="detail-contact-phone">Lorem ipsum dolor sit. <br>Lorem, ipsum dolor.</a></p>
                </div>              
              </div>
          </div>
       </div>
    </section>


  </main><!-- End #main -->

  <?php include "footer.php";?>
  <?php include "footer-includes.php";?>

 
  <!-- Validating form  -->
 <script src="assets/vendor/form-validation/dist/jquery.validate.js"></script>
 <script src="assets/vendor/form-validation/dist/additional-methods.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  


<script>
    toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }
  $("#formvalid").validate();
  $("#formvalid-mob").validate();


  // ------------ Contact form ----------------- //


// For desktop form 

let first_name1 = '';
let last_name1 = '';
let phone_number1 = '';
let email_id1 = '';
let subject_name1 = '';
let comment1 = '';


let first_name_input1 = document.querySelector('#first-name1')

first_name_input1.addEventListener('change',(e)=>{
  first_name1 = e.target.value;
  console.log(first_name1)
})


let last_name_input1 = document.querySelector('#last-name1')

last_name_input1.addEventListener('change',(e)=>{
  last_name1 = e.target.value;
  console.log(last_name1)
})


let number_input1 = document.querySelector('#number1')

number_input1.addEventListener('change',(e)=>{
  phone_number1 = e.target.value;
  console.log(phone_number1)
})


let email_input1 = document.querySelector('#email1')

email_input1.addEventListener('change',(e)=>{
  email_id1 = e.target.value;
  console.log(email_id1)
})


let subject_input1 = document.querySelector('#subject1')

subject_input1.addEventListener('change',(e)=>{
  subject_name1 = e.target.value;
  console.log(subject_name1)
})


let comment_input1 = document.querySelector('#message1')

comment_input1.addEventListener('change',(e)=>{
  comment1 = e.target.value;
  console.log(comment1)
})



let form1 = document.querySelector('#formvalid')

form1.addEventListener('submit',async (e)=> {
  e.preventDefault()


  if(first_name1 !== '' &&  last_name1 !== '' && phone_number1 !== '' && email_id1 !== '' && subject_name1 !== '' && comment1 !== ''){
   
    const options = {
      method: 'POST',
      headers: {
      Accept: 'application/json',
      'Content-Type': 'application/json',
      'api-key':
        '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',
      },
      body: JSON.stringify({ email: email_id1, listIds: [3] ,  attributes:{
        'FIRSTNAME': first_name1, 'LASTNAME': last_name1, 'PHONE': phone_number1, 'SUBJECT' : subject_name1, 'MESSAGE' : comment1,
      } }),
    }
    
    fetch('https://api.sendinblue.com/v3/contacts', options)
      .then((response) => response.json())
      .then((response) => {
        console.log(response)

        if(response.message){
          toastr.error(response.message)
        }else{
        toastr.success("Your form is successfully submitted.")
      }
      
      })
      .catch((err) =>{
        toastr.error(err)
        console.error(err)
      })
    
    
  }else{
    toastr.error("Please fill up required fields")
  }

  
})


// for mobile form 

let first_name2 = '';
let last_name2 = '';
let phone_number2 = '';
let email_id2 = '';
let subject_name2 = '';
let comment2 = '';


let first_name_input2 = document.querySelector('#first-name2')

first_name_input2.addEventListener('change',(e)=>{
  first_name2 = e.target.value;
  console.log(first_name2)
})


let last_name_input2 = document.querySelector('#last-name2')

last_name_input2.addEventListener('change',(e)=>{
  last_name2 = e.target.value;
  console.log(last_name2)
})


let number_input2 = document.querySelector('#number2')

number_input2.addEventListener('change',(e)=>{
  phone_number2 = e.target.value;
  console.log(phone_number2)
})


let email_input2 = document.querySelector('#email2')

email_input2.addEventListener('change',(e)=>{
  email_id2 = e.target.value;
  console.log(email_id2)
})


let subject_input2 = document.querySelector('#subject2')

subject_input2.addEventListener('change',(e)=>{
  subject_name2 = e.target.value;
  console.log(subject_name2)
})


let comment_input2 = document.querySelector('#message2')

comment_input2.addEventListener('change',(e)=>{
  comment2 = e.target.value;
  console.log(comment2)
})



let form2 = document.querySelector('#formvalid-mob')

form2.addEventListener('submit',async (e)=> {
  e.preventDefault()

  if(first_name2 !== '' &&  last_name2 !== '' && phone_number2 !== '' && email_id2 !== '' && subject_name2 !== '' && comment2 !== ''){
   
    const options = {
      method: 'POST',
      headers: {
      Accept: 'application/json',
      'Content-Type': 'application/json',
      'api-key':
        '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',
      },
      body: JSON.stringify({ email: email_id2, listIds: [3] ,  attributes:{
        'FIRSTNAME': first_name2, 'LASTNAME': last_name2, 'PHONE': phone_number2, 'SUBJECT' : subject_name2, 'MESSAGE' : comment2,
      } }),
    }
    
    fetch('https://api.sendinblue.com/v3/contacts', options)
      .then((response) => response.json())
      .then((response) => {
        console.log(response)

        if(response.message){
          toastr.error(response.message)
        }else{
        toastr.success("Your form is successfully submitted.")
      }
      
      })
      .catch((err) =>{
        toastr.error(err)
        console.error(err)
      })
    
    
  }else{
    toastr.error("Please fill up required fields")
  }

  
}) 
</script>

</body>

</html>