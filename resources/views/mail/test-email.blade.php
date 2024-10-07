
<div class="container-fluid">
	<div class="card w-100">
		<form id="emailForm">
			<div class="row">
				<div class="col-12">
					<div class="mb-3">
						<label for="recipient">Người Nhận:</label>
					    <input type="email" name="recipient" placeholder="Recipient Email">
					</div>
				</div>
				<div class="col-12">
					<div class="mb-3">
					<label for="subject">Người Gửi:</label>
					<input type="email" name="subject" placeholder="Subject">
					</div>
				</div>
				<div class="col-12">
					<div class="mb-3">
						<label for="body">Nội Dung:</label>
						<textarea name="body" placeholder="Email Body"></textarea>
					</div>
				</div>
			</div>
		    <button type="button" onclick="sendEmail()">Send Email</button>
		</form>
	</div>
</div>

<script>
    function sendEmail() {
        var form = document.getElementById('emailForm');
        var formData = new FormData(form);

        fetch('/send-email/post', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message);
            fetchEmails(); // Fetch and render emails after sending a new email
        })
        .catch(error => console.error('Error:', error));
    }
</script>
