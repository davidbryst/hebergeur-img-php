<?php 
    $DumyUser = [
        "state" => "New User",
        "username" => "David Bryster",
        "email" => "davidbryster17@gmail.com",
    ];
?>
<div class="mt-16 m-auto w-3/4 h-screen-90 grid grid-rows-5 gap-2 p-2 flex-col bg-one shadow-xl rounded-xl">
    <div class="relative row-span-2 bg-one flex">
        <div class="m-5 aspect-square">
            <img class="h-52 w-52 object-cover outline-dashed rounded" src="./assets/img/ali-jouyandeh-bodgc6H44FA-unsplash.jpg" alt="">
        </div>
        <div class="flex">
            <div class="m-auto">
                <span class="mx-5 px-4 py-2 bg-ten text-one rounded-md"><?php echo $DumyUser["state"] ?></span>
                <p class="mx-5 my-7 text-5xl font-extrabold"><?php echo $DumyUser["username"] ?></p>
                <p class="mx-5 text-sm font-semibold"><span class="text-eight font-semibold">Email : </span> <?php echo $DumyUser["email"] ?></p>
            </div>
        </div>
        <button class="absolute top-0 right-0 px-4 py-2 m-4 rounded-md bg-ten text-one">Edit Profile</button>
    </div>
    <div class="row-span-3 bg-one flex">
        <span class="m-auto">in comming soon</span>
    </div>
    <!-- edite profile -->
    <div class="bg-cone absolute hidden flex top-0 left-0 h-screen w-screen">
        <div class="w-2/3 m-auto h-3/4 bg-one rounded-xl flex shadow-xl">
            <div class="relative bg-ten text-one w-1/2 flex rounded-l-xl">
                <p class="w-3/4 text-2xl m-auto"><span class="text-5xl mb-12">Hello!</span> <br> Edite your profile with a new and correctly infomation</p>
            </div>
            <div class="relative text-ten w-1/2 rounded-r-xl flex">
                <form class="m-auto" action="">
                    <span class="border-dashed border-2 rounded-lg px-4 py-2 border-ten mr-2"><i class="fas fa-envelope"></i></span>
                    <input class="my-2 border-dashed border-2 rounded-lg px-4 py-2 border-ten" type="text" placeholder="username" name="username" id="">
                    <br>
                    <span class="border-dashed border-2 rounded-lg px-4 py-2 border-ten mr-2"><i class="fas fa-envelope"></i></span>
                    <input class="my-2 border-dashed border-2 rounded-lg px-4 py-2 border-ten" type="email" placeholder="email" name="email" id="">
                    <br>
                    <span class="border-dashed border-2 rounded-lg px-4 py-2 border-ten mr-2"><i class="fas fa-lock"></i></span>
                    <input class="my-2 border-dashed border-2 rounded-lg px-4 py-2 border-ten" type="password" placeholder="password" name="password" id="">
                    <br>
                    <span class="border-dashed border-2 rounded-lg px-4 py-2 border-ten mr-2"><i class="fas fa-lock"></i></span>
                    <input class="my-2 border-dashed border-2 rounded-lg px-4 py-2 border-ten" type="password" placeholder="confirme password" name="confirmePassword" id="">

                    <div class="mt-6 m-auto">
                        <button class="auth-form-button | mr-4 border-dashed border-2 border-ten rounded-lg px-4 py-2" type="reset">
                            <i class="fas fa-redo-alt"></i><span class="ml-4 duration-75">reset</span>
                            </button>
                        <button class="auth-form-button | mr-4 bg-ten text-one rounded-lg px-4 py-2" type="submit">
                            <i class="fas fa-sign-in-alt"></i><span class="ml-4 duration-75">sign up</span>
                            </button>
                    </div>
                </form>
                <span class="top-0 right-0 m-4 absolute text-ten text-xl"><i class="outline-dashed outline-2 p-2 rounded fas fa-times-circle"></i></span>
            </div>
        </div>
    </div>
</div>