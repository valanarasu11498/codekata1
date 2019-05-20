#include <stdio.h>
#include <math.h>

int main()
{
    int n,k,r;
    scanf("%d%d",&n,&k);
    if(k==0)
    {
        printf("1");
    }
    else
    {
    r=pow(n,k);
    printf("%d",r);
    }
    return 0;
}
