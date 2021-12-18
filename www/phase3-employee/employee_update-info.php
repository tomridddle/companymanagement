

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>employee Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="container-fluid employee-page">
        <div class="row">
            <div class="col-md-2 employee-page_left col-sm-0 left-side">
                <div class="img-holder">
                    <img src=<?= $imgDir ?> alt="avatar" class="avatar-img">
                </div>

                <h3 class="employee-name text-white mt-2"><?= $fullName ?></h3>
                <h6 class="employee-role text-white ">Role: 
                    <span class="employee-role_title"><?= $role ?></span>
                </h6>
                <h6 class="employee-role text-white mb-4">Department: 
                    <span class="employee-role_title"><?= $department ?></span>
                </h6>

                <div class="employee-page_left-navbar_item left-side_item" id="update-info">
                    <i class="fas fa-pen-square text-white"></i>
                    <p class="text-white employee-page_left-title left-side_title" >Update Info</p>
                </div>

                <div class="employee-page_left-navbar_item left-side_item mt-2" id="tasks-management">
                    <i class="fas fa-briefcase text-white"></i>
                    <p class="text-white employee-page_left-title left-side_title" >Tasks Management</p>
                </div>

                <div class="employee-page_left-navbar_item left-side_item mt-2" id="attendence">
                    <i class="fas fa-calendar-week text-white"></i>
                    <p class="text-white employee-page_left-title left-side_title" >Attendence</p>
                </div>

                <div class="employee-page_left-navbar_item left-side_item mt-2" id="log-out">
                    <i class="fas fa-sign-out-alt text-white"></i>
                    <p class="text-white employee-page_left-title left-side_title" >Log Out</p>
                </div>
            </div>
    
            <div class="col-md-10 employee-page_right col-sm-12 right-side">
                <div class="navbar">
                    <div class="dropdown">
                        <div class="btn btn-secondary dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bars"></i>
                        </div>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#" id="update-info">
                            <p class=" employee-page_left-title left-side_title" >Update Info</p>
                          </a>
                          <a class="dropdown-item" href="#" id="tasks-management">
                            <p class=" employee-page_left-title left-side_title" >Tasks Management</p>
                          </a>
                          <a class="dropdown-item" href="#" id="attendence">
                            <p class=" employee-page_left-title left-side_title" >Attendence</p>
                          </a>
                          <a class="dropdown-item" href="#" id="log-out">
                            <p class=" employee-page_left-title left-side_title" >Log out</p>
                          </a>
                        </div>
                    </div>
                </div>
                
                <!-- main -->
                <div class="employee-page_main">
                <!--Update Info  -->
                    <div class="card update-info_form px-4">
                        <h3 class="text-center">Update Your Info</h3>
    
                        <div class="update-info_form-group form-group update-info_fullname">
                            <label for="fullname">
                                Full Name: <span class="employee-info_fullname"><?= $fullName?></span>
                            </label>
            
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-user-alt"></i>
                                    </div>   
                                </div>
                                <input type="text" name="fullname" class="form-control fullname-input_js" id="fullname" placeholder="<?= $fullName ?>">
                            </div>
                            
                            <span class="error-msg text-danger"></span>
                        </div>
                        
                        
                        <div class="update-info_form-group form-group update-info_email">
                            <label for="email">
                                Email: <span class="employee-info_email"><?= $email ?></span>
                            </label>
            
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-envelope"></i>
                                    </div>   
                                </div>
                                <input type="email" name="email" class="form-control email-input_js" id="email-employee" placeholder="<?= $email ?>">
                            </div>
                            
                            <span class="error-msg text-danger"></span>
                        </div>
    
                        <div class="update-info_form-group form-group">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 update-info_age">
                                    <label for="age">
                                        Age: <span class="employee-info_age"><?= $age?></span>
                                    </label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="far fa-user"></i>
                                            </div>   
                                        </div>
                                        <input type="number" name="age" min="18" max="65" class="form-control age-input_js" id="age-employee" placeholder="<?= $age ?>">
                                    </div>
                            
                                    <span class="error-msg text-danger"></span>
                                </div>
    
                                <div class="col-md-6 col-sm-12 update-info_phone">
                                    <label for="phone">
                                        Phone: <span class="employee-info_phone"><?= $phone?></span>
                                    </label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-phone"></i>
                                            </div>   
                                        </div>
                                        <input type="number" name="phone" class="form-control phone-input_js" id="phone" placeholder="<?= $phone ?>">
                                    </div>
                                    <span class="error-msg text-danger"></span>
                                </div>
                            </div>
                        </div>
    
                        <div class="update-info_form-group form-group update-info_address">
                            <label for="address">
                                Address: <span class="employee-info_address"><?= $address?></span>
                            </label>
            
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-map-marker"></i>
                                    </div>   
                                </div>
                                <input type="text" name="address" class="form-control address-input_js" id="address" placeholder="<?= $address ?>">
                            </div>
                            <span class="error-msg text-danger"></span>
                        </div>
    
                        <div class="update-info_form-group form-group">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 employee_gender">
                                    <label for="gender">
                                        Gender: <span class="employee-info_gender"><?= $gender?></span>
                                    </label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="far fa-user"></i>
                                            </div>   
                                        </div>
                                        <select name="gender" id="gender" class="form-control gender-input_js">
                                            <option selected><?= $gender ?></option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                            
                                    <span class="error-msg text-danger"></span>
                                </div>
    
                                <div class="col-md-6 col-sm-12 update-info_date-join">
                                    <label for="date-join">
                                        Date Joined: <span class="employee-info_date-joined"><?= $dateJoined?></span> 
                                    </label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-calendar-week"></i>
                                            </div>   
                                        </div>
                                        <input type="date" name="date-join" class="form-control date-input_js" id="date-join" >
                                    </div>
                                    <span class="error-msg text-danger"></span>
                                </div>
                            </div>
                        </div>
    
                        <div class="update-info_form-group form-group">
                            <div class="row">
                                <!-- <div class="col-md-6 col-sm-12 custom-file">
                                    <label for="avatar">Avatar</label>
                                    <div class="add-avatar">
                                        <input type="file" name="avatar" multiple="multiple" class="custom-file-input">
                                        <button class="avatar-submit btn btn-primary">
                                            Update Avatar
                                        </button>
                                    </div>
                                </div> -->
                                <div class="col-md-6 col-sm-12 custom-file">
                                    <form action="update-avatar.php" method="POST" enctype="multipart/form-data" id="update-avatar_form">
                                        <div class="custom-file add-avatar">
                                            <input accept="image/*" type="file" name="avatar" class="custom-file-input add-avatar_input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                            <button class="avatar-submit btn btn-primary">
                                                Update Avatar
                                            </button>
                                        </div>
                                    </form>
                                </div>
    
                                <div class="col-md-6 col-sm-12 update-info_date-of-birth">
                                    <label for="date-birth">
                                        Date of birth: <span class="employee-info_date-birth"><?= $dateBirth?></span>
                                    </label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-calendar-week"></i>
                                            </div>   
                                        </div>
                                        <input type="date" name="date-birth" class="form-control birth-input_js" id="date-birth">
                                    </div>
                                    <span class="error-msg text-danger"></span>
                                </div>
                            </div>
                    
                        </div>

                        <div class="alert alert-danger alert-dismissable hide employee-update_failed-msg">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Failed!</strong> You are not changing anything
                        </div>

                        <div class="alert alert-success alert-dismissable hide employee-update_success-msg">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Update Success!</strong> Wait a sec for update
                        </div>

                        <div class="form-group d-flex justify-content-center">
                            <button class="btn btn-success px-4 update-info_submint-btn">SUBMIT</button>
                        </div>

                        
                    </div> 
                </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>
</html>