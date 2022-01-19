<div class="mt-16 m-auto w-3/4 h-screen-90 flex">
    <div class="bg-three w-1/4 p-5 | rounded ">
        <div class="font-extrabold mb-6">upload years</div>
        <div class="rounded shadow-sm bg-one px-6 py-3 my-4">January 2022</div>
        <div class="rounded shadow-sm bg-one px-6 py-3 my-4">February 2022</div>
    </div>
    <div class="w-3/4 p-4 | rounded shadow-sm ">
        <div class="font-extrabold mb-4">images uploaded </div>
        <div>
            <button class="px-2 py-1 bg-five text-ten rounded"><i class="fas fa-th-large"></i></button>
            <button class="px-2 py-1 bg-ten text-one rounded"><i class="fas fa-th-list"></i></button>
        </div>
        <div class="h-[90%] mt-4 rounded scrollbar-hide overflow-y-scroll">

            <?php foreach ($DumyData as $key => $img) {
                include("./src/components/element.upload.php");
            } ?>

        </div>
    </div>
</div>