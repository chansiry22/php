const   body = document.querySelector("body"),
        sidebar = body.querySelector(".sidebar"),
        toggle = body.querySelector(".toggle"),
        searchBtn = body.querySelector(".search_box"),
        modeSwitch = body.querySelector(".toggle_switch"),
        modeText = body.querySelector(".mode_text");
let     lang = document.querySelector(".select_language").value;

        toggle.addEventListener("click", ()=>{
            sidebar.classList.toggle("close");
        });
        
        // if(lang == "ENGLISH"){        
        //     document.querySelector(".name").innerText = 'Kloem Chan';
        //     document.querySelector(".profession").innerText = 'Web Developer';
        //     document.querySelector(".search_input").setAttribute("placeholder", "Search...");
        //     document.querySelector(".item_master").innerText = 'Item Masters';
        //     document.querySelector(".receive_item").innerText = 'Receive Items';
        //     document.querySelector(".transfer_item").innerText = 'Transfer Items';
        //     document.querySelector(".convert_serial").innerText = 'Convert To Serial';
        //     document.querySelector(".assign_serial").innerText = 'Assign Serial';
        //     document.querySelector(".logout").innerText = 'Logout';
        //     if(body.classList.contains("dark")){
        //         modeText.innerText = 'Light Mode';
        //     }else{
        //         modeText.innerText = 'Dark Mode';
        //     }
        //     modeSwitch.addEventListener("click", ()=>{
        //         body.classList.toggle("dark");
        //         if(body.classList.contains("dark")){
        //             modeText.innerText = 'Light Mode';
        //         }else{
        //             modeText.innerText = 'Dark Mode';
        //         }
        //     });
        // }

        if(body.classList.contains("dark")){
            modeText.innerText = 'Light Mode';
        }else{
            modeText.innerText = 'Dark Mode';
        }
        modeSwitch.addEventListener("click", ()=>{
            body.classList.toggle("dark");
            if(body.classList.contains("dark")){
                modeText.innerText = 'Light Mode';
            }else{
                modeText.innerText = 'Dark Mode';
            }
        });
        function Language(){
            let lang = document.querySelector(".select_language").value;
            if(lang == "ENGLISH"){
                document.querySelector(".name").innerText = 'Kloem Chan';
                document.querySelector(".profession").innerText = 'Web Developer';
                document.querySelector(".search_input").setAttribute("placeholder", "Search...");
                document.querySelector(".item_master").innerText = 'Item Masters';
                document.querySelector(".receive_item").innerText = 'Receive Items';
                document.querySelector(".transfer_item").innerText = 'Transfer Items';
                document.querySelector(".convert_serial").innerText = 'Convert To Serial';
                document.querySelector(".assign_serial").innerText = 'Assign Serial';
                document.querySelector(".logout").innerText = 'Logout';
                if(body.classList.contains("dark")){
                    modeText.innerText = 'Light Mode';
                }else{
                    modeText.innerText = 'Dark Mode';
                }
                modeSwitch.addEventListener("click", ()=>{
                    body.classList.toggle("dark");
                    if(body.classList.contains("dark")){
                        modeText.innerText = 'Light Mode';
                    }else{
                        modeText.innerText = 'Dark Mode';
                    }
                });
            }else if(lang == "KHMER"){
                document.querySelector(".name").innerText = 'ខ្លឹមចន្ទន៍';
                document.querySelector(".profession").innerText = 'អ្នកអភិវឌ្ឍន៍កម្មវិធី';
                document.querySelector(".search_input").setAttribute("placeholder", "ស្វែងរក...");
                document.querySelector(".item_master").innerText = 'ឃ្លាំងទំនិញ';
                document.querySelector(".receive_item").innerText = 'ទទួលទំនិញ';
                document.querySelector(".transfer_item").innerText = 'ផ្ទេរទំនិញ';
                document.querySelector(".convert_serial").innerText = 'បម្លែងស៊ឺរៀល';
                document.querySelector(".assign_serial").innerText = 'ផ្ដល់ស៊ឺរៀល';
                document.querySelector(".logout").innerText = 'ចាកចេញ';
                if(body.classList.contains("dark")){
                    modeText.innerText = 'ថ្ងៃ';
                }else{
                    modeText.innerText = 'ងងឹត';
                }
                modeSwitch.addEventListener("click", ()=>{
                    body.classList.toggle("dark");
                    if(body.classList.contains("dark")){
                        modeText.innerText = 'ថ្ងៃ';
                    }else{
                        modeText.innerText = 'ងងឹត';
                    }
                });
            }
        }
        // modeSwitch.addEventListener("click", ()=>{
        //     body.classList.toggle("dark");
        //     if(body.classList.contains("dark")){
        //         modeText.innerText = 'Light Mode';
        //     }else{
        //         modeText.innerText = 'Dark Mode';
        //     }
        // });
        // document.querySelector(".name").innerText = 'Kloem Chan';
        // document.querySelector(".profession").innerText = 'Web Developer';
        // document.querySelector(".search_input").setAttribute("placeholder", "Search...");
        // document.querySelector(".item_master").innerText = 'Item Masters';
        // document.querySelector(".receive_item").innerText = 'Receive Items';
        // document.querySelector(".transfer_item").innerText = 'Transfer Items';
        // document.querySelector(".convert_serial").innerText = 'Convert To Serial';
        // document.querySelector(".assign_serial").innerText = 'Assign Serial';
        // document.querySelector(".logout").innerText = 'Logout';
    
        