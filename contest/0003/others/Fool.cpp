#include<cstdio>
#include<algorithm>
#define MN 10000001
#define ll long long
using namespace std;

const int MOD=1e9+7;
const int N=420;
ll n=2020202020202;
int m=0,w[MN],a[MN],l[MN],r[MN],I[MN];
inline void M(int &x){while(x>=MOD)x-=MOD;}
inline int work(ll n,int k,int mmh[]){
	if (n<=k) return mmh[n];n%=MOD;
	printf("%d\n",n);
	int Mavis=0,MMH,i;
	for (i=0;i<=k;i++) l[i]=n-i,r[i]=MOD-n+i;
	for (i=1;i<=k;i++) l[i]=1LL*l[i]*l[i-1]%MOD;
	for (i=k;i>1;i--) r[i-1]=1LL*r[i]*r[i-1]%MOD;
	for (i=0;i<=k;i++){
		MMH=mmh[i];
		if (i>0) MMH=1LL*MMH*I[i]%MOD*l[i-1]%MOD;
		if (i<k) MMH=1LL*MMH*I[k-i]%MOD*r[i+1]%MOD;
		M(Mavis+=MMH);
	}
	return Mavis;
}
int main(){
	I[0]=I[1]=1;
	for (int i=2;i<MN;i++) I[i]=1LL*(MOD-MOD/i)*I[MOD%i]%MOD;
	for (int i=2;i<MN;i++) I[i]=1LL*I[i]*I[i-1]%MOD;
	w[0]=1;
	for (int i=1;i<=7;i++)
	for (int j=0;j+i<MN;j++)
	M(w[i+j]+=w[j]);
	
	for (int i=1;i<MN;i++) M(w[i]+=w[i-1]);
	for (int i=0;i<9;i++) a[i]=w[i*N];
	printf("%lld\n",n*N);
	if (n*N<MN) printf("%d\n",w[n*N]);
	printf("%d\n",work(n,8,a));
	printf("%d\n",w[10000000]);
}
/*
848484848484840
202006062
787014131
946394287
*/
