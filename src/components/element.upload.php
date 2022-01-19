<!-- element in line -->
<div class="mb-5 flex items-center bg-one px-4 py-4 rounded shadow-sm">
    <div class="hidden flex py-16 justify-center top-0 left-0 absolute bg-cone w-screen h-screen">
        <img class="w-autp text-one object-cover mx-2 outline-dashed rounded" src="<?php echo $img["imgUrl"] ?>" alt="<?php echo $img["imgAlt"] ?>"/>
        <span class="text-one text-xl"><i class="outline-dashed p-4 rounded fas fa-times-circle"></i></span>
    </div>
    <span class="px-0.5 rounded py-16 bg-ten mr-2"></span>
    <!-- <span class="text-5xl px-4 py-2 rounded bg-nine text-one"><i class="fas fa-image"></i></span> -->
    <div class="max-w-80 h-40 flex items-center justify-center">
        <img class="h-full w-autp object-cover mx-2 outline-dashed rounded" src="<?php echo $img["imgUrl"] ?>" alt="<?php echo $img["imgAlt"] ?>">
    </div>
    <div class="w-1/3 flex flex-col px-8 py-4 mx-4 my-2 rounded bg-two flex-auto">
        <p class="truncate text-ten text-ellipsis overflow-hidden bg-one rounded px-4 py-2 my-2 shadow"><?php echo $img["imgName"] ?></p>
        <div>
            <button class="bg-ten text-one rounded px-4 py-2"><i class="fas fa-copy"></i></button>
            <button class="bg-ten text-one rounded px-4 py-2"><i class="fas fa-trash"></i></button>
        </div>
    </div>
</div>