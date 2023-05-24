
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Facebook - Clone</title>
    <script
      src="https://kit.fontawesome.com/7373226b9a.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>

  <body>
    <!-- Navbar -->
    <div class="sticky top-0 bg-white z-50">
      <div class="flex w-full bg-white h-16">
        <div class="flex items-center ml-4">
          <div class="h-10 text-primary">
            <a href="#">
              <i class="fab fa-facebook text-blue-600 text-[40px]"></i>
            </a>
          </div>
          <input
            placeholder="🔍 Search Facebook"
            class="bg-gray-100 rounded-full hidden md:flex h-2/3 focus:outline-none ml-2 px-3 pr-4"
          />
        </div>
        <div
          class="col-span-3 md:ml-12 hidden md:flex items-center justify-center space-x-2"
        >
          <a href="#">
            <div
              class="w-24 h-12 rounded-lg flex items-center justify-center cursor-pointer"
            >
              <div
                class="w-14 h-auto relative flex items-center justify-center"
              >
                <div class="text-primary">
                  <i class="text-2xl fas fa-home text-blue-600"></i>
                  <div
                    class="absolute right-[-36%] bottom-[-35%] w-[96px] h-[3px] bg-blue-600"
                  ></div>
                </div>
              </div>
            </div>
          </a>
          <div
            class="w-24 h-12 rounded-lg flex items-center justify-center cursor-pointer hover:bg-gray-100"
          >
            <div class="w-14 h-auto relative flex items-center justify-center">
              <div
                class="absolute bg-[#e41e3f] text-white text-xs px-1 rounded-lg top-0 right-0"
              >
                7
              </div>
              <div class="text-gray-400">
                <i class="text-2xl fas fa-user-group"></i>
              </div>
            </div>
          </div>
          <div
            class="w-24 h-12 rounded-lg flex items-center justify-center cursor-pointer hover:bg-gray-100"
          >
            <div class="w-14 h-auto relative flex items-center justify-center">
              <div
                class="hidden absolute bg-[#e41e3f] text-white text-xs font-bold px-1 rounded-lg top-0 right-0"
              >
                9+
              </div>
              <div class="text-gray-400">
                <i class="text-2xl fas fa-tv"></i>
              </div>
            </div>
          </div>
          <div
            class="w-24 h-12 rounded-lg flex items-center justify-center cursor-pointer hover:bg-gray-100"
          >
            <div class="w-14 h-auto relative flex items-center justify-center">
              <div
                class="absolute bg-[#e41e3f] text-white text-xs font-bold px-1 rounded-lg top-0 right-0"
              >
                2
              </div>
              <div class="text-gray-400">
                <i class="text-2xl fas fa-store"></i>
              </div>
            </div>
          </div>
          <div
            class="w-24 h-12 rounded-lg flex items-center justify-center cursor-pointer hover:bg-gray-100"
          >
            <div class="w-14 h-auto relative flex items-center justify-center">
              <div
                class="absolute bg-[#e41e3f] text-white text-xs font-bold px-1 rounded-lg top-0 right-0"
              >
                5
              </div>
              <div class="text-gray-400">
                <i class="text-2xl fas fa-users"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="col-span-2 ml-32 flex items-center justify-right">
          <div class="h-10 w-auto flex items-center space-x-2 pr-2">
            <a href="https://github.com/Vaib215"
              ><button
                class="h-10 px-2 flex space-x-1 items-center justify-center focus:outline-none hover:bg-gray-300 rounded-full"
              >
                <div class="h-8 w-14">
                  <img
                    src="Avatar1.png"
                    class="w-10 h-8 rounded-full hidden md:flex"
                    alt=""
                  />
                </div>
                <div class="h-8 hidden md:flex items-center justify-content">
                  <p class="font-semibold text-[0.9em]">Fulano de tal</p>
                </div>
              </button></a
            >
            <button
              class="w-10 h-10 hidden md:inline bg-gray-200 focus:outline-none hover:bg-gray-300 rounded-full"
            >
              <img src="dots-menu.png" class="w-4 h-auto ml-3" />
            </button>

            <div
              class="mobile menu flex space-x-2 relative left-[-7%] md:left-0"
            >
              <button
                class="w-10 h-10 bg-gray-200 focus:outline-none hover:bg-gray-300 rounded-full"
              >
                <i class="fab fa-facebook-messenger"></i></button
              ><button
                class="w-10 h-10 bg-gray-200 focus:outline-none hover:bg-gray-300 rounded-full"
              >
                <i class="fas fa-bell"></i></button
              ><button
                class="w-10 h-10 bg-gray-200 hidden md:inline focus:outline-none hover:bg-gray-300 rounded-full"
              >
                <i class="fas fa-sort-down"></i>
              </button>
              <a
                href="https://github.com/Vaib215"
                class="w-10 h-10 overflow-hidden bg-gray-200 md:hidden focus:outline-none hover:bg-gray-300 rounded-full"
              >
                <img
                  src="Avatar1.png"
                  class="w-12 h-auto"
              /></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="main bg-gray-100 h-[100%]">
      <!-- Center Content -->
      <div class="w-full h-full md:grid grid-cols-7">
        <div class="col-span-2 md:flex justify-start ml-2 hidden">
          <div class="w-9/12 h-auto py-3">
            <ul class="w-full text-black">
              <li
                class="h-12 mb-2 flex items-center justify-content cursor-pointer space-x-2 p-2 rounded-md hover:bg-gray-200"
              >
                <div>
                  <img
                    class="w-8 h-8 rounded-full"
                    src="Avatar1.png"
                    alt="user"
                  />
                </div>

                <div>
                  <p class="text-sm font-medium">Fulano de tal</p>
                </div>
                <img src="check.png" class="w-4 h-4 ml-1" />

              </li>

              <li
                class="h-12 mb-2 flex items-center justify-content cursor-pointer space-x-2 p-2 rounded-md hover:bg-gray-200"
              >
                <div>
                  <img
                    class="w-8 h-8 rounded-full"
                    src="https://static.xx.fbcdn.net/rsrc.php/v3/yx/r/-XF4FQcre_i.png"
                    alt="user"
                  />
                </div>

                <div>
                  <p class="text-sm font-medium">Friends</p>
                </div>
              </li>
              <li
                class="h-12 mb-2 flex items-center justify-content cursor-pointer space-x-2 p-2 rounded-md hover:bg-gray-200"
              >
                <div>
                  <img
                    class="w-8 h-8 rounded-full"
                    src="https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/mk4dH3FK0jT.png"
                    alt="user"
                  />
                </div>

                <div>
                  <p class="text-sm font-medium">Groups</p>
                </div>
              </li>

              <li
                class="h-12 mb-2 flex items-center justify-content cursor-pointer space-x-2 p-2 rounded-md hover:bg-gray-200"
              >
                <div>
                  <img
                    class="w-8 h-8 rounded-full"
                    src="https://static.xx.fbcdn.net/rsrc.php/v3/yU/r/D2y-jJ2C_hO.png"
                    alt="user"
                  />
                </div>

                <div>
                  <p class="text-sm font-medium">Marketplace</p>
                </div>
              </li>

              <li
                class="h-12 mb-2 flex items-center justify-content cursor-pointer space-x-2 p-2 rounded-md hover:bg-gray-200"
              >
                <div>
                  <img
                    class="w-8 h-8 rounded-full"
                    src="https://static.xx.fbcdn.net/rsrc.php/v3/y5/r/duk32h44Y31.png"
                    alt="user"
                  />
                </div>

                <div>
                  <p class="text-sm font-medium">Watch</p>
                </div>
              </li>
              <li
                class="h-12 mb-2 flex items-center justify-content cursor-pointer space-x-2 p-2 rounded-md hover:bg-gray-200"
              >
                <div>
                  <img
                    class="w-8 h-8 rounded-full"
                    src="https://static.xx.fbcdn.net/rsrc.php/v3/y8/r/he-BkogidIc.png"
                    alt="user"
                  />
                </div>

                <div>
                  <p class="text-sm font-medium">Memories</p>
                </div>
              </li>

              <li
                class="h-12 mb-2 flex items-center justify-content cursor-pointer space-x-2 p-2 rounded-md hover:bg-gray-200"
              >
                <div>
                  <img
                    class="w-8 h-8 rounded-full"
                    src="https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/lVijPkTeN-r.png"
                    alt="user"
                  />
                </div>

                <div>
                  <p class="text-sm font-medium">Saved</p>
                </div>
              </li>
              <li
                class="h-12 mb-2 flex items-center justify-content cursor-pointer space-x-2 p-2 rounded-md hover:bg-gray-200"
              >
                <div>
                  <img
                    class="w-8 h-8 rounded-full"
                    src="https://static.xx.fbcdn.net/rsrc.php/v3/yZ/r/i7hepQ2OeZg.png"
                    alt="user"
                  />
                </div>

                <div>
                  <p class="text-sm font-medium">Pages</p>
                </div>
              </li>
              <li
                class="h-12 mb-2 flex items-center justify-content cursor-pointer space-x-2 p-2 rounded-md hover:bg-gray-200"
              >
                <div>
                  <img
                    class="w-8 h-8 rounded-full"
                    src="calendar.png"
                    alt="user"
                  />
                </div>

                <div>
                  <p class="text-sm font-medium">Events</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-span-3 h-full">
          <div class="mt-6 w-full h-full pb-5">
            <div
              class="w-full h-50 flex items-center justify-center space-x-2 overflow-hidden cursor-pointer my-6 "
            >
              <div class="w-28 h-48 relative rounded-xl shadow bg-white">
                <img
                  src="https://scontent.fjai2-2.fna.fbcdn.net/v/t39.30808-6/274669083_3202690923390815_1405356622312353359_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=EwFUM389c0wAX_5Kw6q&_nc_ht=scontent.fjai2-2.fna&oh=00_AT9zajVjwirvhpA2niZa6Zu7Wj0UalUzfyWh4kb0v97VZg&oe=62251B58"
                  class="rounded-t-xl"
                  alt=""
                />
                <div
                  class="w-full absolute flex justify-center"
                  style="bottom: 10%;"
                >
                  <button
                    class="focus:outline-none z-40 w-10 h-10 bg-blue-600 rounded-full border-4 border-white"
                  >
                    <i class="text-white fas fa-plus"></i>
                  </button>
                </div>
                <div
                  class="bg-white z-30 absolute text-center bottom-0 p-1 pt-4 w-full h-auto rounded-b-lg "
                >
                  <p class="text-black text-[12px] font-medium">Create Story</p>
                </div>
              </div>
              <div
                class="w-28 h-48 relative rounded-xl p-3 to-pink-500 shadow cursor-pointer overflow-hidden"
              >
                <img
                  src="story2.png"
                  class="absolute rounded-xl right-0 top-[3.5em] h-auto w-auto justify-between"
                  alt=""
                  style="scale:1.8"
                />
                <div class="absolute">
                  <img
                    src="Avatar1.png"
                    class="w-10 h-10 rounded-full border-4 border-blue-600"
                    alt=""
                  />
                </div>
                <div class="absolute" style="bottom: 5%;">
                  <p class="text-white text-sm font-semibold justify-start">
                    Fulano de tal
                  </p>
                </div>
              </div>
              <div
                class="w-28 h-48 relative rounded-xl p-3 to-pink-500 shadow cursor-pointer overflow-hidden"
              >
                <img
                  src="story3.png"
                  class="absolute rounded-xl right-0 top-[0em] h-auto w-auto justify-between"
                  alt=""
                  style="scale:1"
                />
                <div class="absolute">
                  <img
                    src="Avatar0.png"
                    class="w-10 h-10 rounded-full border-4 border-blue-600"
                    alt=""
                  />
                </div>
                <div class="absolute" style="bottom: 5%;">
                  <p class="text-white text-sm font-semibold justify-start">
                    Maria
                  </p>
                </div>
              </div>
              <div
                class="w-28 h-48 hidden md:flex relative rounded-xl p-3 to-pink-500 shadow cursor-pointer overflow-hidden"
              >
                <img
                  src="story4.png"
                  class="absolute rounded-xl right-0 top-[3.5em] right-[2.5em] h-auto w-auto justify-between"
                  alt=""
                  style="scale:2.8"
                />
                <div class="absolute">
                  <img
                    src="Avatar1.png"
                    class="w-10 h-10 rounded-full border-4 border-blue-600"
                    alt=""
                  />
                </div>
                <div class="absolute" style="bottom: 5%;">
                  <p class="text-white text-sm font-semibold justify-start">
                    Narendra Modi
                  </p>
                </div>
              </div>
              <div
                class="w-28 h-48 relative hidden md:flex rounded-xl p-3 to-pink-500 shadow cursor-pointer overflow-hidden"
              >
                <img
                  src="story5.png"
                  class="absolute rounded-xl right-0 top-[5.5em] h-auto w-auto justify-between"
                  alt=""
                  style="scale:3"
                />
                <div class="absolute">
                  <img
                    src="Avatar0.png"
                    class="w-10 h-10 rounded-full border-4 border-blue-600"
                    alt=""
                  />
                </div>
                <div class="absolute" style="bottom: 5%;">
                  <p class="text-white text-sm font-semibold justify-start">
                    APJ Abdul Kalam
                  </p>
                </div>
              </div>
            </div>
            <div
              class="md:w-[90%] md:flex md:flex-col md:relative md:left-[5%]"
            >
              <div class="rounded-lg bg-white flex flex-col p-3 px-4 shadow">
                <div class="flex items-center space-x-2 border-b pb-3 mb-2">
                  <div class="w-10 h-10">
                    <img
                      src="Avatar1.png"
                      class="w-full h-full rounded-full"
                      alt=""
                    />
                  </div>
                  <button
                    class="hover:bg-gray-200 focus:bg-gray-300 focus:outline-none flex-grow bg-gray-100 text-gray-500 text-left rounded-full h-10 pl-5"
                  >
                    What's on your mind, Fulano de tal?
                  </button>
                </div>
                <div
                  class="flex space-x-3 font-thin text-sm text-gray-600 -mb-1"
                >
                  <button
                    class="flex-1 flex items-center h-10 focus:outline-none focus:bg-gray-200 justify-center space-x-2 hover:bg-gray-100 rounded-md"
                  >
                    <div>
                      <i class="fas fa-video text-[#f3425f] text-2xl"></i>
                    </div>
                    <div>
                      <p class="font-semibold">Create Video</p>
                    </div></button
                  ><button
                    class="flex-1 flex items-center h-10 focus:outline-none focus:bg-gray-200 justify-center space-x-2 hover:bg-gray-100 rounded-md"
                  >
                    <div>
                      <i class="fas fa-images text-green-500 text-2xl"></i>
                    </div>
                    <div>
                      <p class="font-semibold">Photos/Video</p>
                    </div></button
                  ><button
                    class="flex-1 hidden md:flex items-center h-10 focus:outline-none focus:bg-gray-200 justify-center space-x-2 hover:bg-gray-100 rounded-md"
                  >
                    <div>
                      <i class="far fa-face-laugh text-yellow-500 text-2xl"></i>
                    </div>
                    <div>
                      <p class="font-semibold">Feeling/Activity</p>
                    </div>
                  </button>
                </div>
              </div>
              

               
              <div class="mt-4 w-full h-full"> 

                <?php
              include('array.php');

              
               foreach ($posts as $post) {
                # code...
               
                
               ?>
                <div class="w-full shadow h-auto bg-white my-2 rounded-md">
                  <div class="flex items-center space-x-2 p-2.5 px-4">
                    <div class="w-10 h-10">
                      <img
                        src="Avatar1.png"
                        class="w-full h-full rounded-full border-blue-600 border-2"
                        alt=""
                      />
                    </div>
                    
                    
                    <div class="flex-grow flex flex-col">
                      <p class="font-semibold text-sm text-gray-700 flex">
                     >      fulato de tal             <img src="check.png" class="w-4 h-4 ml-1" />

                      </p>
                      <span class="text-xs font-thin text-gray-400"><?php echo $post['date'] ?></span>
                    </div>
                    <div class="w-8 h-8">
                      <button
                        class="w-full h-full hover:bg-gray-100 rounded-full text-gray-400 focus:outline-none"
                      >
                        <i class="fas fa-ellipsis-h"></i>
                      </button>
                    </div>
                  </div>
                  <div class="mb-1">
                    <p class="text-gray-700 max-h-20 px-3 text-sm">
                      <?php 
                      echo $post['description'];
                      ?>
                      <a href="https://lnkd.in/dmJQ8z-v" class="text-blue-600"
                        >https://lnkd.in/dmJQ8z-v</a
                      >
                    </p>
                  </div>
                      <?php 
                                    }
                      ?>

                  <div class="w-full flex flex-col space-y-2 p-2 px-4">
                    <div
                      class="flex items-center justify-between pb-2 border-b border-gray-300 text-gray-500 text-sm"
                    >
                      <div class="flex items-center">
                        <div
                          class="line h-[36px] rounded-lg w-[2px] bg-blue-600 inline absolute left-0"
                        ></div>
                        <button
                          class="focus:outline-none flex items-center justify-center w-4 h-4 rounded-full bg-primary text-white"
                        >
                          <i
                            style="font-size: 10px;"
                            class="fas fa-thumbs-up rounded-full p-1 bg-blue-600"
                          ></i>
                        </button>
                        <div class="ml-1">
                          <p>130K</p>
                        </div>
                      </div>
                      <div class="flex items-center space-x-2">
                        <button>1.2K Comments</button><button>9 Shares</button>
                      </div>
                    </div>
                    <div class="flex space-x-3 text-gray-500 text-sm font-thin">
                      <button
                        class="flex-1 flex items-center h-8 focus:outline-none focus:bg-gray-200 justify-center space-x-2 hover:bg-gray-100 rounded-md"
                      >
                        <div><i class="fas fa-thumbs-up"></i></div>
                        <div>
                          <p class="font-semibold">Like</p>
                        </div></button
                      ><button
                        class="flex-1 flex items-center h-8 focus:outline-none focus:bg-gray-200 justify-center space-x-2 hover:bg-gray-100 rounded-md"
                      >
                        <div><i class="fas fa-comment"></i></div>
                        <div>
                          <p class="font-semibold">Comment</p>
                        </div></button
                      ><button
                        class="flex-1 flex items-center h-8 focus:outline-none focus:bg-gray-200 justify-center space-x-2 hover:bg-gray-100 rounded-md"
                      >
                        <div><i class="fas fa-share"></i></div>
                        <div>
                          <p class="font-semibold">Share</p>
                        </div>
                      </button>
                    </div>
                  </div>
                </div>
             






                <div class="w-full shadow h-auto bg-white my-2 rounded-md">
                  <div class="flex items-center space-x-2 p-2.5 px-4">
                    <div class="w-10 h-10">
                      <img
                        src="Avatar1.png"
                        class="w-full h-full rounded-full border-blue-600 border-2"
                        alt=""
                      />
                    </div>
                    
                    <div class="flex-grow flex flex-col">
                      <p class="font-semibold text-sm text-gray-700 flex ">
                        Fulano de tal 2
                        <img src="check.png" class="w-4 h-4 ml-1" />
                      </p>
                      <span class="text-xs font-thin text-gray-400">3d</span>
                    </div>
                    <div class="w-8 h-8">
                      <button
                        class="w-full h-full hover:bg-gray-100 rounded-full text-gray-400 focus:outline-none"
                      >
                        <i class="fas fa-ellipsis-h"></i>
                      </button>
                    </div>
                  </div>
                  <div class="mb-1">
                    <p class="text-gray-700 max-h-20 px-3 text-sm">
                      I recently made a drummer kit using Javascript. This is a
                      fun project. Web Development is really fun. Live link:
                      <a href="https://lnkd.in/deF_Muf8" class="text-blue-600"
                        >https://lnkd.in/deF_Muf8</a
                      >
                      Project Code:
                      <a href="https://lnkd.in/dB-7dn5A" class="text-blue-600"
                        >https://lnkd.in/dB-7dn5A</a
                      >
                      <span class="text-blue-600">#javascript</span>
                    </p>
                  </div>

                  <div class="w-full flex flex-col space-y-2 p-2 px-4">
                    <div
                      class="flex items-center justify-between pb-2 border-b border-gray-300 text-gray-500 text-sm"
                    >
                      <div class="flex items-center">
                        <button class="flex items-center">
                          <div
                            class="line h-[36px] rounded-lg w-[2px] bg-blue-600 inline absolute left-0"
                          ></div>
                          <button
                            class="focus:outline-none flex items-center justify-center w-4 h-4 rounded-full bg-primary text-white"
                          >
                            <i
                              style="font-size: 10px;"
                              class="fas fa-thumbs-up rounded-full p-1 bg-blue-600"
                            ></i>
                          </button>
                          <div class="ml-1">
                            <p>150K</p>
                          </div>
                        </button>
                      </div>
                      <div class="flex items-center space-x-2">
                        <button>1.7K Comments</button><button>19 Shares</button>
                      </div>
                    </div>
                    <div class="flex space-x-3 text-gray-500 text-sm font-thin">
                      <button
                        class="flex-1 flex items-center h-8 focus:outline-none focus:bg-gray-200 justify-center space-x-2 hover:bg-gray-100 rounded-md"
                      >
                        <div><i class="fas fa-thumbs-up"></i></div>
                        <div>
                          <p class="font-semibold">Like</p>
                        </div></button
                      ><button
                        class="flex-1 flex items-center h-8 focus:outline-none focus:bg-gray-200 justify-center space-x-2 hover:bg-gray-100 rounded-md"
                      >
                        <div><i class="fas fa-comment"></i></div>
                        <div>
                          <p class="font-semibold">Comment</p>
                        </div></button
                      ><button
                        class="flex-1 flex items-center h-8 focus:outline-none focus:bg-gray-200 justify-center space-x-2 hover:bg-gray-100 rounded-md"
                      >
                        <div><i class="fas fa-share"></i></div>
                        <div>
                          <p class="font-semibold">Share</p>
                        </div>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="w-full shadow h-auto bg-white my-2 rounded-md">
                  <div class="flex items-center space-x-2 p-2.5 px-4">
                    <div class="w-10 h-10">
                      <img
                        src="Avatar1.png"
                        class="w-full h-full rounded-full border-blue-600 border-2"
                        alt=""
                      />
                    </div>
                    <div class="flex-grow flex flex-col">
                      <p class="font-semibold text-sm text-gray-700 flex">
                        Fulano de tal
                        <img src="check.png" class="w-4 h-4 ml-1" />

                      </p>
                      <span class="text-xs font-thin text-gray-400">5d</span>
                    </div>
                    <div class="w-8 h-8">
                      <button
                        class="w-full h-full hover:bg-gray-100 rounded-full text-gray-400 focus:outline-none"
                      >
                        <i class="fas fa-ellipsis-h"></i>
                      </button>
                    </div>
                  </div>
                  <div class="mb-1">
                    <p class="text-gray-700 max-h-20 px-3 text-sm">
                      Thanks Amazon Web Services (AWS) for this awesome series.
                      It was great.
                    </p>
                  </div>

                  <div class="w-full flex flex-col space-y-2 p-2 px-4">
                    <div
                      class="flex items-center justify-between pb-2 border-b border-gray-300 text-gray-500 text-sm"
                    >
                      <div class="flex items-center">
                        <button class="flex items-center">
                          <div
                            class="line h-[36px] rounded-lg w-[2px] bg-blue-600 inline absolute left-0"
                          ></div>
                          <button
                            class="focus:outline-none flex items-center justify-center w-4 h-4 rounded-full bg-primary text-white"
                          >
                            <i
                              style="font-size: 10px;"
                              class="fas fa-thumbs-up rounded-full p-1 bg-blue-600"
                            ></i>
                          </button>
                          <div class="ml-1">
                            <p>110K</p>
                          </div>
                        </button>
                      </div>
                      <div class="flex items-center space-x-2">
                        <button>1.8K Comments</button><button>27 Shares</button>
                      </div>
                    </div>
                    <div class="flex space-x-3 text-gray-500 text-sm font-thin">
                      <button
                        class="flex-1 flex items-center h-8 focus:outline-none focus:bg-gray-200 justify-center space-x-2 hover:bg-gray-100 rounded-md"
                      >
                        <div><i class="fas fa-thumbs-up"></i></div>
                        <div>
                          <p class="font-semibold">Like</p>
                        </div></button
                      ><button
                        class="flex-1 flex items-center h-8 focus:outline-none focus:bg-gray-200 justify-center space-x-2 hover:bg-gray-100 rounded-md"
                      >
                        <div><i class="fas fa-comment"></i></div>
                        <div>
                          <p class="font-semibold">Comment</p>
                        </div></button
                      ><button
                        class="flex-1 flex items-center h-8 focus:outline-none focus:bg-gray-200 justify-center space-x-2 hover:bg-gray-100 rounded-md"
                      >
                        <div><i class="fas fa-share"></i></div>
                        <div>
                          <p class="font-semibold">Share</p>
                        </div>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-span-2 hidden md:flex justify-end pr-2">
          <div class="w-9/12 h-auto py-3 pr-2">
            <div
              class="w-full text-gray-600 border-b-2 pb-2 mb-2 border-gray-300"
            >
              <p class="mb-2">Sponsored</p>
            </div>
            <div>
              <div class="flex items-center justify-between text-gray-600">
                <div>
                  <p>Contacts</p>
                </div>
                <div class="flex items-center space-x-3 text-gray-500">
                  <button
                    class="w-8 h-8 focus:outline-none rounded-full hover:bg-gray-200"
                  >
                    <i class="fas fa-video"></i></button
                  ><button
                    class="w-8 h-8 focus:outline-none rounded-full hover:bg-gray-200"
                  >
                    <i class="fas fa-search"></i></button
                  ><button
                    class="w-8 h-8 focus:outline-none rounded-full hover:bg-gray-200"
                  >
                    <i class="fas fa-ellipsis-h"></i>
                  </button>
                </div>
              </div>
              <div class="-ml-2">
                <ul class="w-full text-gray-600">
                  <li
                    class="h-12 mb-2 flex items-center justify-content cursor-pointer space-x-2 p-2 rounded-md hover:bg-gray-200"
                  >
                    <div>
                      <img
                        class="w-8 h-8 rounded-full"
                        src="Avatar0.png"
                        alt="user"
                      />
                    </div>

                    <div class="flex">
                      <p class="text-sm font-semibold">Ronaldo</p>
                      <img src="check.png" class="w-4 h-4 ml-1" />
                    </div>
                  </li>
                  <li
                    class="h-12 mb-2 flex items-center justify-content cursor-pointer space-x-2 p-2 rounded-md hover:bg-gray-200"
                  >
                    <div>
                      <img
                        class="w-8 h-8 rounded-full"
                        src="Avatar1.png"
                        alt="user"
                      />
                    </div>

                    <div>
                      <p class="text-sm font-semibold">Bernardo</p>
                    </div>
                    <img src="check.png" class="w-4 h-4 ml-1 inline" />
                  </li>
                  <li
                    class="h-12 mb-2 flex items-center justify-content cursor-pointer space-x-2 p-2 rounded-md hover:bg-gray-200"
                  >
                    <div>
                      <img
                        class="w-8 h-8 rounded-full"
                        src="Avatar0.png"
                        alt="user"
                      />
                    </div>
                    <div>
                      <p class="text-sm font-semibold">Carolina</p>
                    </div>
                    <img src="check.png" class="w-4 h-4 ml-1 inline" />
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
