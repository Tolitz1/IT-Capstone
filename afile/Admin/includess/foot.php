</div> <!--------- End Row--------->
</div> <!--------- End Container--------->
<script>

    
//declearing html element

const imgDiv = document.querySelector('.profile-pic-div');
const img = document.querySelector('#photo');
const file = document.querySelector('#file');
const upload = document.querySelector('#uploadBtn');

//ifuser hover on profile

imgDiv.addEventListener('mouseenter', function()
{
    uploadBtn.style.display= "block";
});

//if we hover out from img div

imgDiv.addEventListener('mouseeleave', function()
{
    uploadBtn.style.display= "none";
});

//lets work for image showing functionality when we choose an image to upload
 
//when we chose a photo to upload

file.addEventListener('change', function(){
    //this refers to file
    const chooseFile = this.files[0];
    if (chooseFile){

        const reader = new FileReader();
        //fileReader is predefined function od JS

        reader.addEventListener('load', function(){
            img.setAttribute('src', reader.result);
        });
        reader.readAsDataURL(chooseFile);
    }
});
</script>
 

 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    
</body>
</html>
    
</body>
</html>