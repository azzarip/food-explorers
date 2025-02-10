import { loadStripe } from "@stripe/stripe-js";

document.addEventListener("DOMContentLoaded", async () => {

    const paymentContainer = document.getElementById("payment-element");
    if (!paymentContainer) return;

    const stripeKey = paymentContainer.dataset.stripeKey;
    const clientSecret = paymentContainer.dataset.clientSecret;
    const returnUrl = paymentContainer.dataset.returnUrl;


    const stripe = await loadStripe(stripeKey);

    const elements = stripe.elements({
        clientSecret: clientSecret,
        appearance: {
            theme: 'stripe',
            variables: {
                colorPrimary: '#d97706',
            },
        },
    });

    const paymentElement = elements.create('payment', {
        paymentMethodOrder: ['twint', 'card', 'apple_pay', 'google_pay']
    });
    paymentElement.mount('#payment-element');

    const form = document.getElementById('payment-form');

    paymentElement.on('change', (event) => {
        form.scrollIntoView({
            behavior: 'smooth'
        });
    });

    form.addEventListener('submit', async (event) => {
        event.preventDefault();

        const result = await stripe.confirmPayment({
            elements,
            confirmParams: {
                return_url: returnUrl,
            },
        }).then(function (result) {
            if (result.error) { }
        });
    });

});
