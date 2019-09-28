@extends('layouts.page')
@section('header')
<title>{{$post->name}}</title>
@endsection

@section('body')
<div>
  <div class="hero-wrap hero-bread" style="background-image: url({{$post->image_url}});">
    <div class="overlay" style="opacity: .6; width: 100%; background: #000000;"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <!-- <div class="col-md-9 ftco-animate text-center">
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p>
          <h1 class="mb-0 bread">Blog</h1>
        </div> -->
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <h1 class="mb-2 bread" style="font-size: 40px; line-height: 1.5;">{{$post->name}}</h1>
          <p class="breadcrumbs">
            <span class="mr-2">
              <a href="/">Home
                <i class="ion-ios-arrow-forward"></i>
              </a>
            </span>
            <span class="mr-2">
              <a href="/chuyen-muc/{{$category->url}}">{{$category->name}}
                <i class="ion-ios-arrow-forward"></i>
              </a>
            </span>
            <span>{{$post->name}}
              <i class="ion-ios-arrow-forward"></i>
            </span>
          </p>
          <p class="breadcrumbs">
            Người viết bài: {{$post->user_name}}
            <br>
            Lượt xem: {{$post->views}}
          </p>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section ftco-degree-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 ftco-animate">
          {!! $post->content !!}
          <div class="tag-widget post-tag-container mb-5 mt-5">
            <div class="tagcloud">
              @foreach($post->keyw as $keyword)
              <a class="tag-cloud-link">{{$keyword}}</a>
              @endforeach
            </div>
          </div>

          <!-- <div class="about-author d-flex p-4 bg-light">
            <div class="bio align-self-md-center mr-4">
              <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
            </div>
            <div class="desc align-self-md-center">
              <h3>Lance Smith</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div>


          <div class="pt-5 mt-5">
            <h3 class="mb-5">6 Comments</h3>
            <ul class="comment-list">
              <li class="comment">
                <div class="vcard bio">
                  <img src="images/person_1.jpg" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <h3>John Doe</h3>
                  <div class="meta">June 27, 2018 at 2:21pm</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                  <p><a href="#" class="reply">Reply</a></p>
                </div>
              </li>

              <li class="comment">
                <div class="vcard bio">
                  <img src="images/person_1.jpg" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <h3>John Doe</h3>
                  <div class="meta">June 27, 2018 at 2:21pm</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                  <p><a href="#" class="reply">Reply</a></p>
                </div>

                <ul class="children">
                  <li class="comment">
                    <div class="vcard bio">
                      <img src="images/person_1.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                      <h3>John Doe</h3>
                      <div class="meta">June 27, 2018 at 2:21pm</div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                      <p><a href="#" class="reply">Reply</a></p>
                    </div>


                    <ul class="children">
                      <li class="comment">
                        <div class="vcard bio">
                          <img src="images/person_1.jpg" alt="Image placeholder">
                        </div>
                        <div class="comment-body">
                          <h3>John Doe</h3>
                          <div class="meta">June 27, 2018 at 2:21pm</div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                          <p><a href="#" class="reply">Reply</a></p>
                        </div>

                          <ul class="children">
                            <li class="comment">
                              <div class="vcard bio">
                                <img src="images/person_1.jpg" alt="Image placeholder">
                              </div>
                              <div class="comment-body">
                                <h3>John Doe</h3>
                                <div class="meta">June 27, 2018 at 2:21pm</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                <p><a href="#" class="reply">Reply</a></p>
                              </div>
                            </li>
                          </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>

              <li class="comment">
                <div class="vcard bio">
                  <img src="images/person_1.jpg" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <h3>John Doe</h3>
                  <div class="meta">June 27, 2018 at 2:21pm</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                  <p><a href="#" class="reply">Reply</a></p>
                </div>
              </li>
            </ul>
            
            <div class="comment-form-wrap pt-5">
              <h3 class="mb-5">Leave a comment</h3>
              <form action="#" class="p-5 bg-light">
                <div class="form-group">
                  <label for="name">Name *</label>
                  <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                  <label for="email">Email *</label>
                  <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                  <label for="website">Website</label>
                  <input type="url" class="form-control" id="website">
                </div>

                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                </div>

              </form>
            </div>
          </div> -->
        </div>
        <div class="col-lg-4 sidebar ftco-animate">
          <!-- <div class="sidebar-box">
            <form action="#" class="search-form">
              <div class="form-group">
                <span class="icon ion-ios-search"></span>
                <input type="text" class="form-control" placeholder="Search...">
              </div>
            </form>
          </div> -->
          <div class="sidebar-box ftco-animate">
            <h3 class="heading">Chuyên mục khác</h3>
            <ul class="categories">
              @foreach($categories_all as $category)
              <li><a href="/chuyen-muc/{{$category->url}}">{{$category->name}} <span></span></a></li>
              @endforeach
            </ul>
          </div>

          <div class="sidebar-box ftco-animate">
            <h3 class="heading">Bài viết khác</h3>
            @foreach($orther as $orth)
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img mr-4" style="background-image: url({{$orth->image_url}});"></a>
              <div class="text">
                <h3 class="heading-1"><a href="/bai-viet/{{$orth->url}}">{{$orth->name}}</a></h3>
                <div class="meta">
                  <div><a><span class="icon-calendar"></span> {{$orth->datetime}}</a></div>
                  <div><a><span class="icon-person"></span> {{$orth->user_name}}</a></div>
                  <!-- <div><a><span class="icon-chat"></span> 19</a></div> -->
                </div>
              </div>
            </div>
            @endforeach
          </div>

          <!-- <div class="sidebar-box ftco-animate">
            <h3 class="heading">Tag Cloud</h3>
            <div class="tagcloud">
              <a href="#" class="tag-cloud-link">fruits</a>
              <a href="#" class="tag-cloud-link">tomatoe</a>
              <a href="#" class="tag-cloud-link">mango</a>
              <a href="#" class="tag-cloud-link">apple</a>
              <a href="#" class="tag-cloud-link">carrots</a>
              <a href="#" class="tag-cloud-link">orange</a>
              <a href="#" class="tag-cloud-link">pepper</a>
              <a href="#" class="tag-cloud-link">eggplant</a>
            </div>
          </div>
          
          <div class="sidebar-box ftco-animate">
            <h3 class="heading">Paragraph</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
          </div> -->
        </div>
      </div>
    </div>
  </section>
</div>
@endsection