<?php

namespace AiPosts\Gpt;

use Orhanerday\OpenAi\OpenAi;

class Gpt
{
    public function __construct()
    {
    }
    public function register(): void
    {
        add_action('wp_ajax_get_openai_data', array($this, 'get_openai_generated_data'));
    }
    public function get_openai_generated_data(): void
    {

        // $open_ai_key = getenv('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');
        $open_ai_key = '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';
        $open_ai = new OpenAi($open_ai_key);
        $questions = array(
            'List me some fruits',
            'What is the capital of Bangladesh in one word?'
        );

        $complete = $open_ai->completion([
            'model' => 'text-davinci-003',
            'prompt' => $questions,
            'temperature' => 0.5,
            'max_tokens' => 100,
            'frequency_penalty' => 0,
            'presence_penalty' => 0.6,
        ]);

        $response = array();
        foreach (json_decode($complete, true)['choices'] as $key => $result) {
            $response[] = array(
                'que' => $questions[$key],
                'ans' => $result['text']
            );
        }

        wp_send_json($response);


        wp_send_json(json_decode($complete, true));
        // pr(json_decode($complete, true)['choices']);
    }
}
