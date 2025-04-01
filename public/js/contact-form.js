document.getElementById('contactForm').addEventListener('submit', async function(e) {
    e.preventDefault();

    const form = e.target;
    const formData = new FormData(form);

    try {
        const response = await fetch("/contact", {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                'Accept': 'application/json'
            }
        });

        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }

        const data = await response.json();
        console.log('Success:', data);

        if (data.success) {
            form.reset();
            alert('Форма отправлена!');
        }
    } catch (error) {
        console.error('Error:', error);
        alert('Ошибка отправки: ' + error.message);
    }
});
