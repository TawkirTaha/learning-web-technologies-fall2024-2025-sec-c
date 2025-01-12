<form method="POST" action="../controllers/EmployerController.php">
    <input type="hidden" name="action" value="update" />
    <input type="hidden" name="id" value="" />
    <input type="text" name="name" placeholder="Employer Name" required />
    <input type="text" name="company" placeholder="Company Name" required />
    <input type="text" name="contact" placeholder="Contact No" required />
    <button type="submit">Update</button>
</form>