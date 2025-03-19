<form id="myForm" action="submit.php" method="POST">
  <input type="text" name="username" placeholder="Enter your name" required>
  <button type="submit">Submit</button>
</form>

<script>
  const form = document.getElementById('myForm');
  
  form.addEventListener('keydown', function(event) {
    if (event.key === 'Enter') {
      event.preventDefault();
      form.submit(); 
    }
  });
</script>
