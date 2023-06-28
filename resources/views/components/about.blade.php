<section class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                    <p id="about-title" class="lead fw-light mb-4"></p>
                    <p id="about-des" class="text-muted"></p>
                    <div class="d-flex justify-content-center fs-2 gap-4">
                        <a target="_blank" id="twiter" class="text-gradient" href=""><i class="bi bi-twitter"></i></a>
                        <a target="_blank" id="linkdin" class="text-gradient" href=""><i class="bi bi-linkedin"></i></a>
                        <a target="_blank" id="git" class="text-gradient" href=""><i class="bi bi-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    getAbout();
    async function getAbout(){
        try{
            let URL='/aboutData';
            let response=await axios.get(URL);
            document.getElementById('about-title').innerHTML=response.data.title;
            document.getElementById('about-des').innerHTML=response.data.details;


        }catch (e) {
            alert(e);
        }

    }



    getSocialLink();

    async function getSocialLink(){
        try{
            let URL='/socialData';
            let response=await axios.get(URL);

            debugger;
            document.getElementById('loading-div').classList.add('d-none');
            document.getElementById('content-div').classList.remove('d-none');

            document.getElementById('twiter').href=response.data['twitterLink'];
            document.getElementById('linkdin').href=response.data['linkedinLink'];
            document.getElementById('git').href=response.data['githubLink'];

        }catch (e) {
            alert(e);
        }

    }

</script>
