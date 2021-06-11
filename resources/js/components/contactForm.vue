<template>
    <form ref="contactForm" id="contact-form" @submit.prevent="sendContactFrom" method="post">
        <div class="form-group">
            <span>&nbsp;</span>
            <input required v-model="name" type="text" minlength="3" maxlength="60" placeholder="Ваше имя*" name="firstname">
        </div>

        <div class="form-group">
            <span>&nbsp;</span>
            <input required v-model="email" type="email" placeholder="Ваш E-mail*" name="email">
        </div>

        <div class="form-group">
            <span>&nbsp;</span>
            <textarea required minlength="10" maxlength="7000" v-model="message" type="text" placeholder="Ваш комментарий*" name="message"></textarea>
        </div>



        <div class="form-group">
            <button v-bind:class="{ 'd-none': sending }" type="submit">Отправить</button>

            <img v-bind:class="{ 'd-none': !sending }" src="/img/loaders/ball-triangle.svg" alt="">
        </div>

        <div class="footer">
            После отправки вашей заявки мы свяжется с Вами по Вашему E-mail
            для уточнения данных и обработки вашего заказа.
        </div>
    </form>
</template>

<script>
    export default {
        name: "contactForm",
        data: function () {
            return {
                name: '',
                email: '',
                message: '',
                sending: false
            }
        },
        methods: {
            sendContactFrom: function () {

                var response = grecaptcha.getResponse(contactsRec);
                if (response.length === 0) {
                    grecaptcha.reset(contactsRec);
                    return false;
                }

                let formData = new FormData();

                formData.append('name', this.name);
                formData.append('email', this.email);
                formData.append('message', this.message);
                formData.append('g-recaptcha-response', response);

                this.sending = true;

                axios.post('/contacts', formData)
                    .then((response) => {
                        console.log('Отправили');
                        this.$refs.contactForm.reset();
                        this.sending = false;
                        $('#modal_result').fadeIn();
                        this.closeModal();
                    })
                    .catch((error) => {
                        this.sending = false;
                        alert('Error email sending');
                    });

            },
            closeModal: function () {
                setTimeout(function () {
                    $('#modal_result').fadeOut();
                }, 5000);
            }
        }
    }
</script>

<style scoped>

</style>