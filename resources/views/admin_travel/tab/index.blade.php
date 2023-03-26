<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset ('css/style.css')}}">
</head>

<body>
    <div class="container">
        <div class="tab_box">
            <button class="tab_btn active">Home</button>
            <button class="tab_btn">About</button>
            <button class="tab_btn">Blogs</button>
            <button class="tab_btn">Contact Us</button>
            <div class="line"></div>
        </div>
        <div class="content_box">
            <div class="content active">
                <h2>Home</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, aperiam consectetur recusandae iure
                    commodi eum temporibus laborum facere velit porro.</p>
            </div>
            <div class="content">
                <h2>About</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, aperiam consectetur recusandae iure
                    commodi eum temporibus laborum facere velit porro.</p>
            </div>
            <div class="content">
                <h2>Blogs</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, aperiam consectetur recusandae iure
                    commodi eum temporibus laborum facere velit porro.</p>
            </div>
            <div class="content">
                <h2>Contact Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, aperiam consectetur recusandae iure
                    commodi eum temporibus laborum facere velit porro.</p>
            </div>
        </div>
    </div>
    <script>
        const tabs= document.querySelectorAll('.tab_btn');
        const all_content= document.querySelectorAll('.content');

        tabs.forEach((tab, index)=>{
            tab.addEventListener('click', ()=>{
                tabs.forEach(tab=>{tab.classList.remove('active')});
                tab.classList.add('active');
                var line=document.querySelector('.line');
                line.style.width = e.target.offsetWidth + "px";
                line.style.left = e.target.offsetLeft + "px";

                all_content.forEach(content=>{content.classList.remove('active')});
                all_content[index].classList.add('active');
            })
        })
    </script>
</body>

</html>