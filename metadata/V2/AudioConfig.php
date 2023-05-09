<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/audio_config.proto

namespace GPBMetadata\Google\Cloud\Dialogflow\V2;

class AudioConfig
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
-google/cloud/dialogflow/v2/audio_config.protogoogle.cloud.dialogflow.v2google/api/resource.protogoogle/protobuf/duration.proto"/
SpeechContext
phrases (	
boost ("�
SpeechWordInfo
word (	/
start_offset (2.google.protobuf.Duration-

end_offset (2.google.protobuf.Duration

confidence ("�
InputAudioConfigA
audio_encoding (2).google.cloud.dialogflow.v2.AudioEncoding
sample_rate_hertz (
language_code (	
enable_word_info (
phrase_hints (	BB
speech_contexts (2).google.cloud.dialogflow.v2.SpeechContext
model (	E
model_variant
 (2..google.cloud.dialogflow.v2.SpeechModelVariant
single_utterance (*
"disable_no_speech_recognized_event ($
enable_automatic_punctuation ("f
VoiceSelectionParams
name (	@
ssml_gender (2+.google.cloud.dialogflow.v2.SsmlVoiceGender"�
SynthesizeSpeechConfig
speaking_rate (
pitch (
volume_gain_db (
effects_profile_id (	?
voice (20.google.cloud.dialogflow.v2.VoiceSelectionParams"�
OutputAudioConfigL
audio_encoding (2/.google.cloud.dialogflow.v2.OutputAudioEncodingB�A
sample_rate_hertz (T
synthesize_speech_config (22.google.cloud.dialogflow.v2.SynthesizeSpeechConfig"U
TelephonyDtmfEvents>
dtmf_events (2).google.cloud.dialogflow.v2.TelephonyDtmf"q
SpeechToTextConfigL
speech_model_variant (2..google.cloud.dialogflow.v2.SpeechModelVariant
model (	*�
AudioEncoding
AUDIO_ENCODING_UNSPECIFIED 
AUDIO_ENCODING_LINEAR_16
AUDIO_ENCODING_FLAC
AUDIO_ENCODING_MULAW
AUDIO_ENCODING_AMR
AUDIO_ENCODING_AMR_WB
AUDIO_ENCODING_OGG_OPUS)
%AUDIO_ENCODING_SPEEX_WITH_HEADER_BYTE*v
SpeechModelVariant$
 SPEECH_MODEL_VARIANT_UNSPECIFIED 
USE_BEST_AVAILABLE
USE_STANDARD
USE_ENHANCED*�
SsmlVoiceGender!
SSML_VOICE_GENDER_UNSPECIFIED 
SSML_VOICE_GENDER_MALE
SSML_VOICE_GENDER_FEMALE
SSML_VOICE_GENDER_NEUTRAL*�
OutputAudioEncoding%
!OUTPUT_AUDIO_ENCODING_UNSPECIFIED #
OUTPUT_AUDIO_ENCODING_LINEAR_16
OUTPUT_AUDIO_ENCODING_MP3%
!OUTPUT_AUDIO_ENCODING_MP3_64_KBPS"
OUTPUT_AUDIO_ENCODING_OGG_OPUS
OUTPUT_AUDIO_ENCODING_MULAW*�
TelephonyDtmf
TELEPHONY_DTMF_UNSPECIFIED 
DTMF_ONE
DTMF_TWO

DTMF_THREE
	DTMF_FOUR
	DTMF_FIVE
DTMF_SIX

DTMF_SEVEN

DTMF_EIGHT
	DTMF_NINE	
	DTMF_ZERO


DTMF_A

DTMF_B

DTMF_C

DTMF_D
	DTMF_STAR

DTMF_POUNDB�
com.google.cloud.dialogflow.v2BAudioConfigProtoPZ>cloud.google.com/go/dialogflow/apiv2/dialogflowpb;dialogflowpb��DF�Google.Cloud.Dialogflow.V2�AU
automl.googleapis.com/Model6projects/{project}/locations/{location}/models/{model}�Ab
speech.googleapis.com/PhraseSet?projects/{project}/locations/{location}/phraseSets/{phrase_set}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

