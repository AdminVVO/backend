@extends('layouts.App')

@section('title') Blog @endsection

@section('css')

	<link href="{{ URL::asset('assets/css/header-bck.css') }}" rel="stylesheet"/>
	<link href="{{ URL::asset('assets/css/blog.css') }}" rel="stylesheet"/>

@endsection

@section('content')

	<section class="blog entero">
        <div class="blog_container medio">
            <div class="main-block">
                <h1 class="main-block_title h2">
                    Lorem ipsum
                </h1>
                <p class="span-guests">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed nulla eu neque fringilla pulvinar imperdiet ac lectus. Suspendisse sit amet efficitur tortor. Vivamus aliquet eu ipsum eget vehicula. Nunc efficitur, lectus id iaculis faucibus, quam eros tincidunt justo, vestibulum fringilla elit neque venenatis quam. Ut est nisl, cursus ac consequat quis, cursus eget purus. Curabitur placerat turpis ut elit bibendum congue. Sed sit amet fermentum libero, vel dignissim tellus. Donec tincidunt risus quis turpis tincidunt, quis lobortis ligula hendrerit. Proin a ex sit amet augue vulputate hendrerit non a elit. Suspendisse quam augue, convallis placerat aliquam eget, maximus quis nisi.
                </p>
                <br>
                <p class="span-guests">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed nulla eu neque fringilla pulvinar imperdiet ac lectus. Suspendisse sit amet efficitur tortor. Vivamus aliquet eu ipsum eget vehicula. Nunc efficitur, lectus id iaculis faucibus, quam eros tincidunt justo, vestibulum fringilla elit neque venenatis quam. Ut est nisl, cursus ac consequat quis, cursus eget purus. Curabitur placerat turpis ut elit bibendum congue. Sed sit amet fermentum libero, vel dignissim tellus. Donec tincidunt risus quis turpis tincidunt, quis lobortis ligula hendrerit. Proin a ex sit amet augue vulputate hendrerit non a elit. Suspendisse quam augue, convallis placerat aliquam eget, maximus quis nisi.
                </p>
            </div>
            <div class="description-block">
                <h3 class="description-block_title h2-guests">Lorem ipsum dolor sit amet</h3>
                <p class="span-guests">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed nulla eu neque fringilla pulvinar imperdiet ac lectus. Suspendisse sit amet efficitur tortor. Vivamus aliquet eu ipsum eget vehicula. Nunc efficitur, lectus id iaculis faucibus, quam eros tincidunt justo, vestibulum fringilla elit neque venenatis quam. Ut est nisl, cursus ac consequat quis, cursus eget purus. Curabitur placerat turpis ut elit bibendum congue. Sed sit amet fermentum libero, vel dignissim tellus. Donec tincidunt risus quis turpis tincidunt, quis lobortis ligula hendrerit. Proin a ex sit amet augue vulputate hendrerit non a elit. Suspendisse quam augue, convallis placerat aliquam eget, maximus quis nisi.
                </p>
                <br>
                <p class="span-guests">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed nulla eu neque fringilla pulvinar imperdiet ac lectus. Suspendisse sit amet efficitur tortor. Vivamus aliquet eu ipsum eget vehicula. Nunc efficitur, lectus id iaculis faucibus, quam eros tincidunt justo, vestibulum fringilla elit neque venenatis quam. Ut est nisl, cursus ac consequat quis, cursus eget purus. Curabitur placerat turpis ut elit bibendum congue. Sed sit amet fermentum libero, vel dignissim tellus. Donec tincidunt risus quis turpis tincidunt, quis lobortis ligula hendrerit. Proin a ex sit amet augue vulputate hendrerit non a elit. Suspendisse quam augue, convallis placerat aliquam eget, maximus quis nisi.
                </p>
            </div>
            <div class="place-block container flex flex-ai-c flex-jc-sb">
                <div class="place-block_img">
                    <img src="{{ URL::asset('assets/img/card/c3.jpg') }}" alt="">
                </div>
                <div class="place-block_text">
                    <h3 class="h2-guests">Where you'll be</h3>
                    <p class="span-guests">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed nulla eu neque fringilla pulvinar imperdiet ac lectus. Suspendisse sit amet efficitur tortor. Vivamus aliquet eu ipsum eget vehicula. Nunc efficitur, lectus id iaculis faucibus, quam eros tincidunt justo, vestibulum fringilla elit neque venenatis quam. Ut est nisl, cursus ac consequat quis, cursus eget purus. Curabitur placerat turpis ut elit bibendum congue. Sed sit amet fermentum libero, vel dignissim tellus. Donec tincidunt risus quis turpis tincidunt, quis lobortis ligula hendrerit. Proin a ex sit amet augue vulputate hendrerit non a elit. Suspendisse quam augue, convallis placerat aliquam eget, maximus quis nisi.
                    </p>
                    <br>
                    <p class="span-guests">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed nulla eu neque fringilla pulvinar imperdiet ac lectus. Suspendisse sit amet efficitur tortor. Vivamus aliquet eu ipsum eget vehicula. Nunc efficitur, lectus id iaculis faucibus, quam eros tincidunt justo, vestibulum fringilla elit neque venenatis quam. Ut est nisl, cursus ac consequat quis, cursus eget purus. Curabitur placerat turpis ut elit bibendum congue. Sed sit amet fermentum libero, vel dignissim tellus. Donec tincidunt risus quis turpis tincidunt, quis lobortis ligula hendrerit. Proin a ex sit amet augue vulputate hendrerit non a elit. Suspendisse quam augue, convallis placerat aliquam eget, maximus quis nisi.
                    </p>
                </div>
            </div> 
            
            <div class="articles flex col-flex-auto">
                <div class="articles_item text-block-auto">
                    <img src="{{ URL::asset('assets/img/icons/building.svg') }}" alt="">
                    <h3 class="_txteh">Lorem ipsum dolor sit amet.</h3>
                    <p class="span-guests">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed nulla eu neque fringilla pulvinar imperdiet ac lectus. Suspendisse sit amet efficitur tortor. Vivamus aliquet eu ipsum eget vehicula. Nunc efficitur, lectus id iaculis faucibus, quam eros tincidunt justo, vestibulum fringilla elit neque venenatis quam. Ut est nisl, cursus ac consequat quis, cursus eget purus.
                    </p>
                    <a href="#" class="_btnsm _btnsm_asm">Show More ></a>
                </div>
                <div class="articles_item text-block-auto">
                    <img src="{{ URL::asset('assets/img/icons/building.svg') }}" alt="">
                    <h3 class="_txteh">Lorem ipsum dolor sit amet.</h3>
                    <p class="span-guests">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed nulla eu neque fringilla pulvinar imperdiet ac lectus. Suspendisse sit amet efficitur tortor. Vivamus aliquet eu ipsum eget vehicula. Nunc efficitur, lectus id iaculis faucibus, quam eros tincidunt justo, vestibulum fringilla elit neque venenatis quam. Ut est nisl, cursus ac consequat quis, cursus eget purus.
                    </p>
                    <a href="#" class="_btnsm _btnsm_asm">Show More ></a>
                </div>
                <div class="articles_item text-block-auto">
                    <img src="{{ URL::asset('assets/img/icons/building.svg') }}" alt="">
                    <h3 class="_txteh">Lorem ipsum dolor sit amet.</h3>
                    <p class="span-guests">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed nulla eu neque fringilla pulvinar imperdiet ac lectus. Suspendisse sit amet efficitur tortor. Vivamus aliquet eu ipsum eget vehicula. Nunc efficitur, lectus id iaculis faucibus, quam eros tincidunt justo, vestibulum fringilla elit neque venenatis quam. Ut est nisl, cursus ac consequat quis, cursus eget purus.
                    </p>
                    <a href="#" class="_btnsm _btnsm_asm">Show More ></a>
                </div>
            </div>

            <div class="dates container flex flex-ai-c flex-jc-sb">
                <div class="dates_text">
                    <h3 class="_txteh">Lorem ipsum</h3>
                    <p class="_txtec">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed nulla eu neque fringilla pulvinar imperdiet ac lectus. Suspendisse sit amet efficitur tortor. Vivamus aliquet eu ipsum eget vehicula. Nunc efficitur, lectus id iaculis faucibus, quam eros tincidunt justo, vestibulum fringilla elit neque venenatis quam. Ut est nisl, cursus ac consequat quis, cursus eget purus.
                    </p>
                </div>
                <div class="dates_btn">
                    <a href="#" class="btn-h">Add dates</a>
                </div>
            </div>

            <div class="related-articles flex flex-jc-sb col-flex-auto">
                <div class="related-articles_text text-block-auto">
                    <h3 class="h2-guests">Lorem ipsum dolor sit amet</h3>
                    <p class="_txtec">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed nulla eu neque fringilla pulvinar imperdiet ac lectus. Suspendisse sit amet efficitur tortor. Vivamus aliquet eu ipsum eget vehicula. Nunc efficitur, lectus id iaculis faucibus, quam eros tincidunt justo, vestibulum fringilla elit neque venenatis quam. Ut est nisl, cursus ac consequat quis, cursus eget purus. Curabitur placerat turpis ut elit bibendum congue. Sed sit amet fermentum libero, vel dignissim tellus. Donec tincidunt risus quis turpis tincidunt, quis lobortis ligula hendrerit. Proin a ex sit amet augue vulputate hendrerit non a elit. Suspendisse quam augue, convallis placerat aliquam eget, maximus quis nisi.</p>
                </div>
                <div class="related-articles_text text-block-auto">
                    <h3 class="h2-guests">Lorem ipsum dolor sit amet</h3>
                    <p class="_txtec">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed nulla eu neque fringilla pulvinar imperdiet ac lectus. Suspendisse sit amet efficitur tortor. Vivamus aliquet eu ipsum eget vehicula. Nunc efficitur, lectus id iaculis faucibus, quam eros tincidunt justo, vestibulum fringilla elit neque venenatis quam. Ut est nisl, cursus ac consequat quis, cursus eget purus. Curabitur placerat turpis ut elit bibendum congue. Sed sit amet fermentum libero, vel dignissim tellus. Donec tincidunt risus quis turpis tincidunt, quis lobortis ligula hendrerit. Proin a ex sit amet augue vulputate hendrerit non a elit. Suspendisse quam augue, convallis placerat aliquam eget, maximus quis nisi.</p>
                </div>
                <div class="related-articles_text text-block-auto">
                    <h3 class="h2-guests">Lorem ipsum dolor sit amet</h3>
                    <p class="_txtec">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed nulla eu neque fringilla pulvinar imperdiet ac lectus. Suspendisse sit amet efficitur tortor. Vivamus aliquet eu ipsum eget vehicula. Nunc efficitur, lectus id iaculis faucibus, quam eros tincidunt justo, vestibulum fringilla elit neque venenatis quam. Ut est nisl, cursus ac consequat quis, cursus eget purus. Curabitur placerat turpis ut elit bibendum congue. Sed sit amet fermentum libero, vel dignissim tellus. Donec tincidunt risus quis turpis tincidunt, quis lobortis ligula hendrerit. Proin a ex sit amet augue vulputate hendrerit non a elit. Suspendisse quam augue, convallis placerat aliquam eget, maximus quis nisi.</p>
                </div>
            </div>

            <div class="suggestion-articles flex flex-jc-sb col-flex-auto">
                <div class="suggestion-articles_text text-block-auto">
                    <h3 class="h2-guests">Lorem ipsum dolor sit amet</h3>
                    <p class="_txtec">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed nulla eu neque fringilla pulvinar imperdiet ac lectus. Suspendisse sit amet efficitur tortor. Vivamus aliquet eu ipsum eget vehicula. Nunc efficitur, lectus id iaculis faucibus, quam eros tincidunt justo, vestibulum fringilla elit neque venenatis quam. Ut est nisl, cursus ac consequat quis, cursus eget purus. Curabitur placerat turpis ut elit bibendum congue. Sed sit amet fermentum libero, vel dignissim tellus. Donec tincidunt risus quis turpis tincidunt, quis lobortis ligula hendrerit. Proin a ex sit amet augue vulputate hendrerit non a elit. Suspendisse quam augue, convallis placerat aliquam eget, maximus quis nisi.</p>
                </div>
                <div class="suggestion-articles_text text-block-auto">
                    <h3 class="h2-guests">Lorem ipsum dolor sit amet</h3>
                    <p class="_txtec">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed nulla eu neque fringilla pulvinar imperdiet ac lectus. Suspendisse sit amet efficitur tortor. Vivamus aliquet eu ipsum eget vehicula. Nunc efficitur, lectus id iaculis faucibus, quam eros tincidunt justo, vestibulum fringilla elit neque venenatis quam. Ut est nisl, cursus ac consequat quis, cursus eget purus. Curabitur placerat turpis ut elit bibendum congue. Sed sit amet fermentum libero, vel dignissim tellus. Donec tincidunt risus quis turpis tincidunt, quis lobortis ligula hendrerit. Proin a ex sit amet augue vulputate hendrerit non a elit. Suspendisse quam augue, convallis placerat aliquam eget, maximus quis nisi.</p>
                </div>
                <div class="suggestion-articles_text text-block-auto">
                    <h3 class="h2-guests">Lorem ipsum dolor sit amet</h3>
                    <p class="_txtec">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed nulla eu neque fringilla pulvinar imperdiet ac lectus. Suspendisse sit amet efficitur tortor. Vivamus aliquet eu ipsum eget vehicula. Nunc efficitur, lectus id iaculis faucibus, quam eros tincidunt justo, vestibulum fringilla elit neque venenatis quam. Ut est nisl, cursus ac consequat quis, cursus eget purus. Curabitur placerat turpis ut elit bibendum congue. Sed sit amet fermentum libero, vel dignissim tellus. Donec tincidunt risus quis turpis tincidunt, quis lobortis ligula hendrerit. Proin a ex sit amet augue vulputate hendrerit non a elit. Suspendisse quam augue, convallis placerat aliquam eget, maximus quis nisi.</p>
                </div>
                <div class="suggestion-articles_text text-block-auto">
                    <h3 class="h2-guests">Lorem ipsum dolor sit amet</h3>
                    <p class="_txtec">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed nulla eu neque fringilla pulvinar imperdiet ac lectus. Suspendisse sit amet efficitur tortor. Vivamus aliquet eu ipsum eget vehicula. Nunc efficitur, lectus id iaculis faucibus, quam eros tincidunt justo, vestibulum fringilla elit neque venenatis quam. Ut est nisl, cursus ac consequat quis, cursus eget purus. Curabitur placerat turpis ut elit bibendum congue. Sed sit amet fermentum libero, vel dignissim tellus. Donec tincidunt risus quis turpis tincidunt, quis lobortis ligula hendrerit. Proin a ex sit amet augue vulputate hendrerit non a elit. Suspendisse quam augue, convallis placerat aliquam eget, maximus quis nisi.</p>
                </div>
            </div>
        </div>
    </section>

@endsection


@section('script')

@endsection
