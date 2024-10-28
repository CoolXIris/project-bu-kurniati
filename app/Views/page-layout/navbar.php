<nav class="bg-gray-900 py-2" style="margin-bottom: 30px;">
        <div class="container mx-auto flex items-center justify-between">
            <div class="flex items-center space-x-4" style="display: flex;flex-direction:column;margin-left:15px">
                <a href="#" class="text-2xl font-bold">GADGETGLIMPSE</a>
                <span class="text-sm" style="font-size:11px">Review and News Around Technology</span>
            </div>
            <div class="flex items-center space-x-6">
                <div class="relative group">
                    <a class="focus:outline-none" href="<?= base_url('news')?>">NEWS</button>
                    
                </div>
                <div class="relative group">
                    <a class="focus:outline-none" href="<?= base_url('review')?>">REVIEW</button>
                    
                </div>
                <div class="relative group">
                    <a class="focus:outline-none" href="<?= base_url('gadget')?>">GADGET</button>
                    
                </div>
                <div class="relative group">
                    <a class="focus:outline-none" href="<?= base_url('laptop')?>">LAPTOP</button>
                </div>
                <div class="relative group">
                    <button class="focus:outline-none">MORE</button>
                    <div class="absolute hidden group-hover:block bg-gray-800 text-white mt-2 py-2 w-48">
                        <a href="<?= base_url('recommended')?>" class="block px-4 py-2">RECOMMENDED</a>
                        <a href="<?= base_url('tips') ?>" class="block px-4 py-2">TIPS</a>
                        <a href="<?= base_url('testspeed')?>" class="block px-4 py-2">TEST SPEED JARINGAN</a>
                    </div>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <button class="focus:outline-none"><i class="fas fa-search"></i></button>
                <button class="focus:outline-none">Aa</button>
                <button class="focus:outline-none"><i class="fas fa-adjust"></i></button>
                <button class="relative focus:outline-none">
                    <i class="fas fa-bell"></i>
                    <span class="absolute top-0 right-0 inline-block w-2 h-2 bg-red-600 rounded-full"></span>
                </button>
            </div>
        </div>
    </nav>