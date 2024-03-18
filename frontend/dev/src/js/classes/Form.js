import {validateForm} from "./Validation.js";
import Modal from "./Modal.js";
import Alert from "./Alert.js";



let instances = [];
class Form {
    // методы класса
    constructor(target) {
        this.form = target
        this.handlerSubmit = this.eventSubmit.bind(this)
        this.form.addEventListener('submit', this.handlerSubmit)

    }
    async eventSubmit(e) {
        e.preventDefault();


        const err = validateForm(this.form)

        const data  = new FormData(this.form)
        data.append('action','mailer')
        let response = await fetch(window.ajax,{
            method:'POST',
            body:data
        })
        response = await response.json()

        if (response.success) {
            await Modal.openTarget('thank');
            this.form.reset();


        } else {
            Alert.add(response.error, 'error')
        }

    }

    static destroy(){

    }
    static init(){
        const forms = document.querySelectorAll('.form');
        if (forms?.length) {
            forms.forEach(item => {
                instances.push(new Form(item))
            })
        }


    }
}
Form.init()