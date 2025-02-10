<?php

namespace App\Http\Controllers;

use App\Interfaces\CategoryRepositoryInterface;
use App\Interfaces\TaskRepositoryInterface;
use App\Models\categorModel;
use App\Models\CategoryTaskModel;
use App\Models\taskModel;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mpdf\Mpdf;
use Mpdf\Config\ConfigVariables;
use Mpdf\Config\FontVariables;

class HomeController extends Controller
{
    private TaskRepositoryInterface $taskRepo;
    private CategoryRepositoryInterface $categoryRepo;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(TaskRepositoryInterface $taskRepo,CategoryRepositoryInterface $categoryRepo)
    {
        $this->middleware('auth');
        $this->taskRepo = $taskRepo;
        $this->categoryRepo = $categoryRepo;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tasks = $this->taskRepo->all();
        // $tasks = taskModel::with('images')->orderBy('priority', 'ASC')->get(); // morphMany relationship
        dd($tasks->toArray());
        return view('home', compact('tasks'));
    }
  
    public function createTask() {
        $categories = $this->categoryRepo->all();
        $user = Auth::id();
        // dd($categories);
        return view('tasks.createTask', compact('categories', 'user'));
    }

    public function saveTask(Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'priority' => 'required',
            'categories.*' => 'required'
        ]);
        $task = $this->taskRepo->save($request->all());
        $cates = $request->categories;
        if(count($cates) > 0) {
            $this->categoryRepo->attachCategory($cates, $task->id);
        }
        return redirect()->route('home')->with('success', 'Task created successfully');

    }

    public function editTask($id) {
        $task = $this->taskRepo->taskById($id);
        $user = Auth::id();
        $categories = $this->categoryRepo->all();
        // $users = $this->taskRepo->create();
        return view('tasks.editTask', compact('task', 'categories', 'user'));
    }

    public function updateTask(Request $request) {
        // dd($request->all());
        $this->taskRepo->update($request->all());
        $cates = $request->categories;
        if(count($cates) > 0) {
            CategoryTaskModel::where('task_id', $request->task_id)->delete();
            $this->categoryRepo->attachCategory($cates, $request->task_id);
        }
        return redirect()->route('home')->with('success', 'Task updated successfully');
    }

    public function destroye($id) {
        $task = $this->taskRepo->destroye($id);

        if($task) {
            return redirect()->route('home')->with('success', 'Task destroye successfully');
        }else {
            return redirect()->route('home')->with('error', 'Opps! something went wrong');
        }
    }

    public function generatePdf($id) {
        // dd($id);
         // Get default font directories
        // $configVariables = new ConfigVariables();
        // $fontDirs = $configVariables->getDefaults()['fontDir'];

        // // Set up the custom font data for Jameel Noori Nastaleeq
        // $mpdf = new Mpdf([
        //     'fontDir' => array_merge($fontDirs, [
        //         public_path('fonts/')  // Directory where your custom fonts are stored
        //     ]),
        //     'fontdata' => [
        //         'Jameel Noori Nastaleeq' => [
        //             'R' => 'Jameel Noori Nastaleeq Regular.ttf',
        //             'B' => 'Jameel Noori Nastaleeq Bold.ttf',  // Add Bold font if available
        //             'useOTL' => 0xFF,
        //             'useKashida' => 75,
        //         ]
        //     ],
        //     'default_font' => 'Jameel Noori Nastaleeq',
        // ]);
 
        //  // Check if the font is loaded properly
        //  if (!isset($mpdf->fontdata['Jameel Noori Nastaleeq'])) {
        //      throw new \Exception('Font not loaded properly.');
        //  }
        // // Check if the font is loaded properly
        // // if (!isset($fontData['Jameel Noori Nastaleeq'])) {
        // //     throw new \Exception('Font not loaded properly.');
        // // }
        // // dd($mpdf->fontdata['Jameel Noori Nastaleeq']);
        // // Urdu content to render
        // $html = '<h1>اردو میں خوش آمدید</h1>';
        // $html .= '<p>کی مدد سے بنایا گیا ہے۔ Laravel اور mPDF یہ ایک اردو پی ڈی ایف ہے، جو</p>';

        // // Write HTML content to the PDF
        // $mpdf->WriteHTML($html);

        // // Output the generated PDF
        // $mpdf->Output('urdu-text.pdf', 'D'); // For download, change 'D' to 'I' for inline display
    
        // $html = '
        // <html>
        //     <head>
        //     <meta charset="UTF-8">
        //         <style>
        //             @font-face {
        //                 font-family: "Jameel Noori Nastaleeq", serif;
        //                 src: url("fonts/JameelNooriNastaleeq-Regular.ttf") format("truetype");
        //             }
        //             body {
        //                 font-family: "Jameel Noori Nastaleeq", serif;
        //                 direction: rtl;
        //             }
        //             h1 {
        //                 font-size: 24px;
        //             }
        //             p {
        //                 font-size: 14px;
        //             }
        //         </style>
        //     </head>
        //     <body>
        //         <h1 style="font-family: "Jameel Noori Nastaleeq", serif !important;">اردو میں خوش آمدید</h1>
        //         <p style="font-family: "Jameel Noori Nastaleeq", serif !important;">یہ ایک اردو پی ڈی ایف ہے</p>
        //         <p style="font-family: "Jameel Noori Nastaleeq", serif !important;">  Dompdf اور Laravel کی مدد سے بنایا گیا ہے۔</p>
        //     </body>
        // </html>';

        // // Load HTML into Dompdf
        // $pdf = Pdf::loadHTML($html);

        // // Output the generated PDF (D for download)
        // return $pdf->download('urdu-pdf.pdf');

        $data = [
            'urduText' => 'یہ ایک اردو متن ہے جو کہ پی ڈی ایف میں ظاہر کیا جا رہا ہے۔',
        ];

        $pdf = Pdf::loadView('pdf', $data);
        return $pdf->download('urdu-text.pdf');
    }
}
