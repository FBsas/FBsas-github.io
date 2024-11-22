const frmEmail= document.getElementById('frm-email')
frmEmail.addEventListener('submit', sendEmail)

const serviceId= 'service_6qw3xne'
const templateId= 'template_4sz1s1d'
const apikey= 'de2TSlFRV4tEBi6eB'

function sendEmail(event) {
    event.preventDefault()
    emailjs.init (serviceId)

    emailjs.sendForm(serviceId,templateId,frmEmail,apikey)
    .then (result=> Swal.fire("Su mensaje fue enviado con exito "))
    .catch ( error=> {   
        Swal.fire({  
            icon: 'error',
            tittle: 'Oops',
            text: 'No fue posible enviar su mensaje',
        }) });
    }
    