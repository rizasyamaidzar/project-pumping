@extends('welcome')
@section('content')
    <div class="grid grid-cols-1 gap-4 mb-4">
        <div class="flex items-center justify-evenly p-10 rounded-lg shadow-sm shadow-gray-500 bg-white dark:bg-gray-800">
            <table id="pagination-table">
                <thead>
                    <tr>
                        <th>
                            <span class="flex items-center">
                                Model Name
                            </span>
                        </th>
                        <th>
                            <span class="flex items-center">
                                Developer
                            </span>
                        </th>
                        <th data-type="date" data-format="Month YYYY">
                            <span class="flex items-center">
                                Release Date
                            </span>
                        </th>
                        <th>
                            <span class="flex items-center">
                                Parameters
                            </span>
                        </th>
                        <th>
                            <span class="flex items-center">
                                Primary Application
                            </span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">GPT-4</td>
                        <td>OpenAI</td>
                        <td>March 2023</td>
                        <td>1 trillion</td>
                        <td>Natural Language Processing</td>
                    </tr>
                    <tr>
                        <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">BERT</td>
                        <td>Google</td>
                        <td>October 2018</td>
                        <td>340 million</td>
                        <td>Natural Language Understanding</td>
                    </tr>
                    <tr>
                        <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">DALL-E 2</td>
                        <td>OpenAI</td>
                        <td>April 2022</td>
                        <td>3.5 billion</td>
                        <td>Image Generation</td>
                    </tr>
                    <tr>
                        <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">T5</td>
                        <td>Google</td>
                        <td>October 2019</td>
                        <td>11 billion</td>
                        <td>Text-to-Text Transfer</td>
                    </tr>
                    <tr>
                        <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">GPT-3.5</td>
                        <td>OpenAI</td>
                        <td>November 2022</td>
                        <td>175 billion</td>
                        <td>Natural Language Processing</td>
                    </tr>
                    <tr>
                        <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Codex</td>
                        <td>OpenAI</td>
                        <td>August 2021</td>
                        <td>12 billion</td>
                        <td>Code Generation</td>
                    </tr>
                    <tr>
                        <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">PaLM 2</td>
                        <td>Google</td>
                        <td>May 2023</td>
                        <td>540 billion</td>
                        <td>Multilingual Understanding</td>
                    </tr>
                    <tr>
                        <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">LaMDA</td>
                        <td>Google</td>
                        <td>May 2021</td>
                        <td>137 billion</td>
                        <td>Conversational AI</td>
                    </tr>
                    <tr>
                        <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">CLIP</td>
                        <td>OpenAI</td>
                        <td>January 2021</td>
                        <td>400 million</td>
                        <td>Image and Text Understanding</td>
                    </tr>
                    <tr>
                        <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">XLNet</td>
                        <td>Google</td>
                        <td>June 2019</td>
                        <td>340 million</td>
                        <td>Natural Language Processing</td>
                    </tr>
                    <tr>
                        <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Meena</td>
                        <td>Google</td>
                        <td>January 2020</td>
                        <td>2.6 billion</td>
                        <td>Conversational AI</td>
                    </tr>
                    <tr>
                        <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">BigGAN</td>
                        <td>Google</td>
                        <td>September 2018</td>
                        <td>Unlimited</td>
                        <td>Image Generation</td>
                    </tr>
                    <tr>
                        <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Electra</td>
                        <td>Google</td>
                        <td>March 2020</td>
                        <td>14 million</td>
                        <td>Natural Language Understanding</td>
                    </tr>
                    <tr>
                        <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Swin Transformer</td>
                        <td>Microsoft</td>
                        <td>April 2021</td>
                        <td>88 million</td>
                        <td>Vision Processing</td>
                    </tr>
                    <tr>
                        <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">GPT-NeoX-20B</td>
                        <td>EleutherAI</td>
                        <td>April 2022</td>
                        <td>20 billion</td>
                        <td>Natural Language Processing</td>
                    </tr>
                    <tr>
                        <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Ernie 3.0</td>
                        <td>Baidu</td>
                        <td>July 2021</td>
                        <td>10 billion</td>
                        <td>Natural Language Processing</td>
                    </tr>
                    <tr>
                        <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Turing-NLG</td>
                        <td>Microsoft</td>
                        <td>February 2020</td>
                        <td>17 billion</td>
                        <td>Natural Language Processing</td>
                    </tr>
                    <tr>
                        <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Wu Dao 2.0</td>
                        <td>Beijing Academy of AI</td>
                        <td>June 2021</td>
                        <td>1.75 trillion</td>
                        <td>Multimodal Processing</td>
                    </tr>
                    <tr>
                        <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Jukebox</td>
                        <td>OpenAI</td>
                        <td>April 2020</td>
                        <td>1.2 billion</td>
                        <td>Music Generation</td>
                    </tr>
                    <tr>
                        <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">StyleGAN2</td>
                        <td>NVIDIA</td>
                        <td>February 2020</td>
                        <td>Unlimited</td>
                        <td>Image Generation</td>
                    </tr>
                    <tr>
                        <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">FLAN</td>
                        <td>Google</td>
                        <td>December 2021</td>
                        <td>137 billion</td>
                        <td>Few-shot Learning</td>
                    </tr>
                    <tr>
                        <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">GShard</td>
                        <td>Google</td>
                        <td>June 2020</td>
                        <td>600 billion</td>
                        <td>Multilingual Understanding</td>
                    </tr>
                    <tr>
                        <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">AlphaFold</td>
                        <td>DeepMind</td>
                        <td>December 2020</td>
                        <td>Unknown</td>
                        <td>Protein Folding</td>
                    </tr>
                    <tr>
                        <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">GPT-J</td>
                        <td>EleutherAI</td>
                        <td>June 2021</td>
                        <td>6 billion</td>
                        <td>Natural Language Processing</td>
                    </tr>
                    <tr>
                        <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">M6</td>
                        <td>Alibaba</td>
                        <td>December 2020</td>
                        <td>10 billion</td>
                        <td>Multimodal Processing</td>
                    </tr>
                    <tr>
                        <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Megatron-Turing NLG</td>
                        <td>NVIDIA & Microsoft</td>
                        <td>October 2021</td>
                        <td>530 billion</td>
                        <td>Natural Language Processing</td>
                    </tr>
                    <tr>
                        <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">DeepSpeed</td>
                        <td>Microsoft</td>
                        <td>February 2020</td>
                        <td>Not disclosed</td>
                        <td>AI Training Optimization</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    <div class="flex items-center justify-center mb-4 rounded bg-blue-700">



    </div>
@endsection
@section('script')
    <script>
        if (document.getElementById("pagination-table") && typeof simpleDatatables.DataTable !== 'undefined') {
            const dataTable = new simpleDatatables.DataTable("#pagination-table", {
                paging: true,
                perPage: 5,
                perPageSelect: [5, 10, 15, 20, 25],
                sortable: false
            });
        }
    </script>
@endsection
