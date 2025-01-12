<form method="POST" action="../controllers/EmployerController.php">
    <input type="hidden" name="action" value="register" />
    <input type="text" name="name" placeholder="Employer Name" required />
    <input type="text" name="company" placeholder="Company Name" required />
    <input type="text" name="contact" placeholder="Contact No" required />
    <input type="text" name="username" placeholder="Username" required />
    <input type="password" name="password" placeholder="Password" required />
    <button type="submit">Register</button>
</form>