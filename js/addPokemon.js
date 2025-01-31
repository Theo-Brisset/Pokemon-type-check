/*
* @params EventObject event
* @return FileReader object 
* This function takes the event onchange from the input #image, if there is a doc
* there with a good format/size, it will do a new FileReader and put it in the img#preview display. 
* If there is a problem, just return and nothing happens
*/
function validateAndPreview(event) {
    console.log(event.target)
    const input = event.target;
    if(!input.files || input.files.length === 0){
        console.log('problem with file')
        return;
    }

    const file = input.files[0];

    const preview = document.getElementById('preview');

    if(file){
        const validTypes = ['image/png', 'image/jpeg'];
        if(!validTypes.includes(file.type)){
            alert('Please select a file with a valid type, jpg or png, thanks !');
            event.target.value('');
            preview.style.display = 'none';
            return
        }
        
        const maxSize = 1*1024*1024;
        if(file.size > maxSize){
            alert('Oops, your file is a bit too large ! Maybe you can find one smaller ? Maximum is 1Mo.')
            event.target.value('');
            preview.style.display='none';
            return
        }
        
        const reader = new FileReader();
        reader.onload = function(){
            preview.src = reader.result;
            preview.style.display = 'block';
        }
        reader.readAsDataURL(file);

    }
}