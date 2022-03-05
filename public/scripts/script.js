const video = document.getElementById('videoInput')
const MODEL_URL = `/models`

$( document ).ready(function() {
    Promise.all([
        faceapi.nets.faceRecognitionNet.loadFromUri(MODEL_URL),
        faceapi.nets.faceLandmark68Net.loadFromUri(MODEL_URL),
        faceapi.nets.mtcnn.loadFromUri(MODEL_URL),
        faceapi.nets.ssdMobilenetv1.loadFromUri(MODEL_URL) 
    ]).then(start)
});

function start() {
    navigator.getUserMedia(
        { video:{} },
        stream => video.srcObject = stream,
        err => console.error(err)
    )
    
    //video.src = '../videos/speech.mp4'
    console.log('video added')
    recognizeFaces();
}

async function recognizeFaces() {
    const labeledDescriptors = await loadLabeledImages()
    console.log(labeledDescriptors)
    const faceMatcher = new faceapi.FaceMatcher(labeledDescriptors, 0.7)

    video.addEventListener('play', async () => {
        console.log('Playing')
        const canvas = faceapi.createCanvasFromMedia(video)
        document.getElementById('videoCanvas').append(canvas)
        if (document.querySelectorAll('#videoCanvas canvas').length > 1) {
            document.querySelectorAll('#videoCanvas canvas')[0].remove()
        }
        
        const displaySize = { width: video.width, height: video.height }
        faceapi.matchDimensions(canvas, displaySize)

        setInterval(async () => {
            const detections = await faceapi.detectAllFaces(video, 
                new faceapi.MtcnnOptions({ minFaceSize: 200, scaleFactor: 0.8 })
                ).withFaceLandmarks().withFaceDescriptors()

            const resizedDetections = faceapi.resizeResults(detections, displaySize)

            canvas.getContext('2d').clearRect(0, 0, canvas.width, canvas.height)

            const results = resizedDetections.map((d) => {
                return faceMatcher.findBestMatch(d.descriptor)
            })
            results.forEach( (result, i) => {
                const box = resizedDetections[i].detection.box
                const drawBox = new faceapi.draw.DrawBox(box, { label: result.toString() })
                drawBox.draw(canvas)
                if (result._label != 'unknown' && result._distance > 0.68) {
                    if (parameter == 1) {
                        video.pause();
                        document.getElementById('instant-5').classList.remove('menu-active');
                        console.log(result)
                        document.getElementById('instant-4').classList.add('menu-active');
                        document.getElementById('datangBtn').innerHTML = `Absen Masuk`;
                        document.getElementById('pesan').innerHTML = `Data absensi Anda telah kami rekam kedalam database sistem, Selamat Bekerja!`;
                        document.getElementById('pesanBtn').innerHTML = `Kerja`;
                        absenDatang('valid')
                    } else if (parameter == 2) {
                        video.pause();
                        document.getElementById('instant-5').classList.remove('menu-active');
                        console.log(result)
                        document.getElementById('instant-4').classList.add('menu-active');
                        document.getElementById('pulangBtn').innerHTML = `Absen Pulang`;
                        document.getElementById('pesan').innerHTML = `Data absensi Anda telah kami rekam kedalam database sistem, Selamat Beristirahat!`;
                        document.getElementById('pesanBtn').innerHTML = `Pulang`;
                        absenPulang('valid')
                    }
                }
            })
        }, 100)
    })
}


function loadLabeledImages() {
    // const labels = ['Black Widow', 'Captain America', 'Hawkeye' , 'Jim Rhodes', 'Tony Stark', 'Thor', 'Captain Marvel']
    const labels = ['Asrani','Ronny Hermansyah','Dani Surya Nata'] // for WebCam
    return Promise.all(
        labels.map(async (label)=>{
            const descriptions = []
            for(let i=1; i<=2; i++) {
                const img = await faceapi.fetchImage(`/pegawai/labeled_images/${label}/${i}.jpg`)
                const detections = await faceapi.detectSingleFace(img).withFaceLandmarks().withFaceDescriptor()
                console.log(label + i + JSON.stringify(detections))
                descriptions.push(detections.descriptor)
            }
            document.body.append(label+' Faces Loaded | ')
            return new faceapi.LabeledFaceDescriptors(label, descriptions)
        })
    )
}