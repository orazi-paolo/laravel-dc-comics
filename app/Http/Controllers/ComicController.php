<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ComicController extends Controller
{
    protected array $pages;
    protected array $quickNavigation;
    protected array $navigationSections;
    protected array $imgSocial;

    public function __construct()
    {
        $this->pages = [
            'characters' => 'CHARACTERS',
            'comics' => 'COMICS',
            'movies' => 'MOVIES',
            'tv' => 'TV',
            'games' => 'GAMES',
            'collectibles' => 'COLLECTIBLES',
            'videos' => 'VIDEOS',
            'fans' => 'FANS',
            'news' => 'NEWS',
            'shop' => 'SHOP',
        ];
        $this->quickNavigation = [
            'digital-comics' => [
                'name' => 'DIGITAL COMICS',
                'image' =>  asset('img/buy-comics-digital-comics.png')
            ],
            'dc-merchandise' => [
                'name' => 'DC MERCHANDISE',
                'image' => asset('img/buy-comics-merchandise.png')
            ],
            'subscription' => [
                'name' => 'SUBSCRIPTION',
                'image' => asset('img/buy-comics-subscriptions.png')
            ],
            'comic-shop-locator' => [
                'name' => 'COMIC SHOP LOCATOR',
                'image' => asset('img/buy-comics-shop-locator.png')
            ],
            'dc-power-visa' => [
                'name' => 'DC POWER VISA',
                'image' => asset('img/buy-dc-power-visa.svg')
            ]
        ];
        $this->navigationSections = [
            'DC COMICS' => [
                'title' => 'DC COMICS',
                'links' => [
                    'Characters',
                    'Comics',
                    'Movies',
                    'Tv',
                    'Games',
                    'Videos',
                    'News'
                ]
            ],
            'DC' => [
                'title' => 'DC',
                'links' => [
                    'Terms Of Use',
                    'Privacy policy (New)',
                    'Ad Choices',
                    'Advertising',
                    'Jobs',
                    'Subscriptions',
                    'Talent Workshops',
                    'CPSC Certificates',
                    'Ratings',
                    'Shop Help',
                    'Contact Us'
                ]
            ],
            'SITES' => [
                'title' => 'SITES',
                'links' => [
                    'DC',
                    'MAD Magazine',
                    'DC Kids',
                    'DC Universe',
                    'DC Power Visa'
                ]
            ],
            'SHOP' => [
                'title' => 'SHOP',
                'links' => [
                    'Shop DC',
                    'Shop DC Collectibles'
                ]
            ]
        ];
        $this->imgSocial = [
            'facebook' => asset('img/footer-facebook.png'),
            'twitter' => asset('img/footer-twitter.png'),
            'youtube' => asset('img/footer-youtube.png'),
            'pinterest' => asset('img/footer-pinterest.png'),
            'periscope' => asset('img/footer-periscope.png')
        ];

         // Condividi le variabili con tutte le viste
        View::share('pages', $this->pages);
        View::share('quickNavigation', $this->quickNavigation);
        View::share('navigationSections', $this->navigationSections);
        View::share('imgSocial', $this->imgSocial);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('pages.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       Comic::create($request->all());
       return redirect()->route('comic.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('pages.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        //
    }
}