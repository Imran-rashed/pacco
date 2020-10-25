<?php include 'inc/header.php';?>

        <main class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                    	<div class="page-title">
                    		<h1>Users</h1>
                    	</div>
                        <div class="row">
                            <div class="col-lg-8">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="border: 0;color: #a5a8b8">Person</th>
                                            <th scope="col" style="border: 0;color: #a5a8b8">Email</th>
                                            <th scope="col" style="border: 0;color: #a5a8b8">Role</th>
                                            <th scope="col" style="border: 0;color: #a5a8b8">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <img src="img/profile.jpg">
                                                <span>Hossain Samrat</span>
                                            </th>
                                            <td>itsumrat@gmail.com</td>
                                            <td>Editor</td>
                                            <td>
                                                <a href="#" class="material-icons">close</a>
                                                <a href="#" data-toggle="modal" data-target="#rolechange-modal" class="material-icons">create</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <img src="img/profile.jpg">
                                                <span>Hossain Samrat</span>
                                            </th>
                                            <td>itsumrat@gmail.com</td>
                                            <td>Editor</td>
                                            <td>
                                                <a href="#" class="material-icons">close</a>
                                                <a href="#" data-toggle="modal" data-target="#rolechange-modal" class="material-icons">create</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <img src="img/profile.jpg">
                                                <span>Hossain Samrat</span>
                                            </th>
                                            <td>itsumrat@gmail.com</td>
                                            <td>Editor</td>
                                            <td>
                                                <a href="#" class="material-icons">close</a>
                                                <a href="#" data-toggle="modal" data-target="#rolechange-modal" class="material-icons">create</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-4">
                                <div class="user-create-area">
                                    <h6>Create New Team Member</h6>
                                    <form>
                                        <input type="text" placeholder="Full name">
                                        <input type="email" placeholder="Email">
                                        <select>
                                            <option>Manager</option>
                                            <option>Editor</option>
                                            <option>Viewer</option>
                                        </select>
                                        <button type="submit">save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
      <!-- page-content" -->

<?php include 'inc/modal.php';?>      
<?php include 'inc/footer.php';?>
