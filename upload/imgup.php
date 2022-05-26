<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/up.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Prescription Upload</title>
</head>
<body>
    <a href="http://localhost/Final_Presentation/homepage/home.php">..Back</a>
<div class="row">
            <div style="margin-left: 20px;" class="col-md-12 my-3 why_prescription">
                <p style="color: #10837d;margin-left: 20px;" class="h5">কেন প্রেসক্রিপশনের ছবি আপলোড করবেন?</p>
                <ul>
                    <li>প্রেসক্রিপশন হারানোর ভয় থেকে আপনি মুক্ত, আজীবনের জন্য আরোগ্য এপে আপনি খুজে পাবেন আপনার ডিজিটাল প্রেসক্রিপশন।</li>
                    <li>ডাক্তারের হাতের লেখা বুঝা না গেলেও কোন সমস্যা নেই, আমাদের 'A' গ্রেড ফার্মাসিস্ট প্রেস্ক্রিপশন দেখে ঔষধ অর্ডারে আপনাকে সহযোগিতা করবে।</li>
                    <li>আপনার প্রেসক্রিপশন কখনো তৃতীয় কোন পক্ষের সাথে শেয়ার করা হবে না।</li>
                    <li>বাংলাদেশ সরকারের নিয়ম অনুসারে, কিছু মেডিসিন অর্ডার করার জন্য প্রেসক্রিপশন থাকা বাধ্যতামুলক।</li>
                </ul>
            </div>
            <div class="car">
                <div class="col-md-6 my-3 car1">
                <div class="card">
                    <div class="card-body py-5">
                        <form id="uploadPrescriptionSubmit" method="post" action="save.php" enctype="multipart/form-data">
                            <p class="h4 m-0">Have any prescription? Upload here</p>
                            <small>Upload .png,.jpg,.jpeg file only</small>
                            <div class="custom-file mt-3 field">
                                <label>Give a username</label>
                                <input type="text" name="cust_id"><br><br>

                                <input type="file" name="profile" class="form-control" id="uploadPrescriptionField" multiple="" accept="image/*">
                                <div id="imagePreviewContainer"></div>
                            </div>
                            <!-- <div id="uploadPrescriptionPreview" class="row"></div> -->
                            <div class="d-grid">
                                <br>
                                <!-- <button type="submit" class="btn btn-info mt-3">Upload Prescription</button> -->
                                <input class="btn btn-info"type="submit" name="upload">
                            </div>
                            <div class="d-flex align-items-start mt-3">
                                <img loading="lazy" width="10" src="https://cdn2.arogga.com/assets/img/discountTag.png" alt="arogga.com"> 
                                <small style="font-size:11px;margin: -4px 0 0 5px;">Your attached prescription will be secure and private. Only our pharmacist will review it.</small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-5 my-2 car2">
                <div class="card">
                    <div class="card-header">
                        <h5>Valid Prescription Guide</h5>                        
                    </div>
                    <div class="card-body d-flex">
                        <div class="m-1">
                            <img src="https://cdn2.arogga.com/assets/img/prescriptionImage.jpg" class="img-fluid" alt="arogga prescription guide">
                        </div>
                        <div class="m-1">
                            <ul>
                                <li class="mb-2">Include details of doctor and patient+clinic visit details.</li>
                                <li>Medicines will be dispensed as per prescription.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
            
</body>
</html>
